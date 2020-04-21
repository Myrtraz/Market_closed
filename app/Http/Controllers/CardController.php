<?php

namespace App\Http\Controllers;

use App\Address;
use App\Buy;
use App\Card;
use App\Http\Requests\cardAddRequest;
use App\Payment;
use App\Purchases;
use App\Sales;
use Auth;
use Illuminate\Http\Request;

class CardController extends Controller
{
    public function cardAdd(Request $request)
    {
        $id = $request->id;
        $qty = $request->qty;
        $sm = $request->sm;
    	return view('cardAdd' ,compact('id', 'qty', 'sm'));
    }

    public function cardAddPost(cardAddRequest $request) {
    	$user_id = Auth::user()->id;
    	$cardName = $request->cardName;
        $creditCard = $request->creditCard;
        $type = $request->type;
        $cvv = $request->cvv;
        $exp = $request->exp;
        $exp2 = $request->exp2;

        Card::where('user_id', $user_id)->update([
            'current' => false
        ]);

    	$cardCredit = Card::create([
            'user_id' => $user_id,
            'cardName' => $cardName,
            'creditCard' => $creditCard,
            'type' => $type,
            'cvv' => $cvv,
            'exp' => $exp,
            'exp2' => $exp2,
            'current' =>true
        ]);

        $id = $request->id;
        $qty = $request->qty;
        $sm = $request->sm;

        return redirect()->route('creditCard', compact('id', 'qty', 'sm'));
    }

    	public function setCard($id) {
        $user_id = Auth::user()->id;
        Card::where('user_id', $user_id)->update([
            'current' => false
        ]);

        Card::where('user_id', $user_id)
        ->where('id', $id)
        ->update([
            'current' => true
        ]);
        
         return redirect()->back();
    }

    public function creditCard(Request $request)
    {
        $user = Auth::user();

        $buy = Sales::find($request->id);
        $cc = Payment::get()->first();

        $card = Card::where('user_id',$user->id)
            ->where('current', true)
            ->first();

        $cardHash = '';
        if (! is_null($card)) {
            $cardHash .= $card->creditCard;
            $cardHash = str_repeat('*', 12) . substr($cardHash, -4);
        }


        $cards = Card::where('user_id',$user->id)->get();
        $qty = $request->qty;
        $id = $request->id;
        $sm = $request->sm;
        $payment = $request->payment;

        if (! is_null($payment)) {
            if ($payment == 'cc') {
                return redirect()->route('dues', compact('id', 'qty','payment', 'sm'));
            } elseif($payment == 'add_cc') {
                $qty = $request->qty;
                $id = $request->id;
                $sm = $request->sm;
                return redirect()->route('cardAdd', compact('id', 'qty', 'sm'));
            } else {
               return redirect()->route('makeOrder', compact('id', 'qty','payment', 'sm'));
            }
        }
        
        return view('creditCard', compact('buy', 'user', 'qty', 'id','cardHash', 'card','cards', 'cc','sm'));
    }

    public function dues(Request $request)
    {
        $duesqty = $request->duesqty;
        $qty = $request->qty;
        $id = $request->id;
        $sm = $request->sm;
        $payment = $request->payment;

        $user = Auth::user();
        $buy = Sales::find($request->id);
        $card = Card::where('user_id',$user->id)
            ->where('current', true)
            ->first();  

            $cardHash = '';
        if (! is_null($card)) {
            $cardHash .= $card->creditCard;
            $cardHash = str_repeat('*', 12) . substr($cardHash, -4);
        }

        return view('dues', compact('user','duesqty','buy','card','cardHash','id','qty', 'sm', 'payment'));
    }

    public function duesPost(Request $request)
    {
        $user = Auth::user();
        $buy = Sales::find($request->id);
        $card = Card::where('user_id',$user->id)
            ->where('current', true)
            ->first();

        $duesqty = $request->duesqty;
        $qty = $request->qty;
        $id = $request->id;
        $payment = $request->payment;
        $sm = $request->sm;
        

        if (is_null($duesqty)) {
            return redirect()->back();
        }

        return redirect()->route('cvvCode', [ 'id'=> $request->id, 'qty' => $request->qty, 'sm'=> $request->sm, 'payment' =>$request->payment, 'duesqty'=> $request->duesqty, ]);
    }

    public function secretCode(Request $request)
    {
        $user = Auth::user();
        $qty = $request->qty;
        $id = $request->id;
        $payment = $request->payment;
        $sm = $request->sm;
        $duesqty = $request->duesqty;
        $cvv = $request->cvv;

        return view('cvvCode', compact('id', 'qty','sm','payment', 'duesqty', 'cvv'));
    }

    public function makeOrderCC(Request $request) {
        $qty = $request->qty;
        $id = $request->id;
        $payment = $request->payment;
        $sm = $request->sm;
        $duesqty = $request->duesqty;
        $cvv = $request->cvv;

        $user = Auth::user();
        $buyerId = Auth::user()->id;
        $publication = Sales::find($request->id);
        $address = Address::where('user_id',$user->id)
            ->where('current', true)
            ->first();

        $card = Card::where('user_id',$user->id)
            ->where('current', true)
            ->first();

        if (! is_null($cvv)) {
            $currentCard = Card::where('user_id',$user->id)
                ->where('current', true)
                ->where('cvv', $cvv)
                ->first();

            if (! is_null($currentCard)) {
                $makeOrderCC = Buy::create([
                    'payment_method_id'=>$request->payment,
                    'shipping_id' =>$request->sm,
                    'buyer_id' => $buyerId,
                    'seller_id' => $publication->user_id,
                    'publish_id' => $publication->id,
                    'address_id' => $address->id,
                    'status' => 'create',
                    'quantity' => $request->qty,
                    'total' => $request->qty * $publication->prices
                ]);

                $purchase = Purchases::create([
                    'user_id' =>$user->id,
                    'buy_id' =>$makeOrderCC->id,
                    'card_id' =>$card->id,
                    'duesQty' => $duesqty,
                    'amount' => $request->qty * $publication->prices,
                ]);

                $UpdatePurchases = Buy::where([
                    'id' => $makeOrderCC->id
                ])
                ->update(['purchase_id' => $purchase->id]);

                $updateSales = Sales::where([
                    'id' => $id
                ])
                ->update(['quantity' => $publication->quantity - $qty]);

                //$summation = Buy::where('publish_id' => $publication->id)->sum('quantity');

                return redirect()->route('thanks', [ 'id'=> $request->id, 'qty' => $request->qty, 'sm'=> $request->sm, 'payment' =>$request->payment, 'duesqty'=> $request->duesqty]);
            } else {
                return redirect()->back()->with('Codigo del reverso de su tarjeta es *INCORRECTO*, por favor, vuelva a reintentarlo');
            }
        }
    }
}
