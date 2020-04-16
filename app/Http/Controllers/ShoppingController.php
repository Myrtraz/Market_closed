<?php

namespace App\Http\Controllers;

use App\Address;
use App\Addresses;
use App\Buy;
use App\Card;
use App\Http\Requests\BuyRequest;
use App\Payment;
use App\Sales;
use Auth;
use Illuminate\Http\Request;

class ShoppingController extends Controller
{
    public function myShopping()
    {
    	$user_id = Auth::user()->id;
    	$shoppings = Buy::where('buyer_id', $user_id)->get();
    	return view('myShopping',compact('shoppings'));
    }

    public function buy(Request $request) {
        $user = Auth::user();

        $buy = Sales::find($request->id);

        $address = Address::where('user_id',$user->id)
            ->where('current', true)
            ->first();

        $addresses = Address::where('user_id',$user->id)->get();
        $qty = $request->qty;
        $id = $request->id;

    	return view('buy', compact('buy', 'user', 'qty', 'id', 'address','addresses'));
    }

    public function toBuy(BuyRequest $request) {
    	$product = $request->all();
		$toBuy = Buy::create($product);

    	//return redirect()->route('sales');
    }

    public function makeSale(Request $request) {
        return redirect()->route('creditCard', [ 'id'=> $request->id, 'qty' => $request->qty ]);
        
        $request->id;
        $request->qty;
        $user = Auth::user();

        $buyerId = Auth::user()->id;
        $publication = Sales::find($request->id);

        $address = Address::where('user_id',$user->id)
            ->where('current', true)
            ->first();

        Buy::create([
            'buyer_id' => $buyerId,
            'seller_id' => $publication->user_id,
            'publish_id' => $publication->id,
            'address_id' => $address->id,
            'status' => 'create',
            'quantity' => $request->qty,
            'total' => $request->qty * $publication->prices
        ]);

        return redirect()->route('creditCard');
    }

    public function creditCard(Request $request)
    {
        $user = Auth::user();

        $buy = Sales::find($request->id);
        $cc = Payment::get()->first();

        $card = Card::where('user_id',$user->id)
            ->where('current', true)
            ->first();

        $cards = Card::where('user_id',$user->id)->get();
        $qty = $request->qty;
        $id = $request->id;
        $payment = $request->payment;

        if (! is_null($payment)) {
            if ($payment == 'cc') {
                return redirect()->to(route('cvvCode'));
            } elseif($payment == 'add_cc') {
                return view('cardAdd');
            } else {
                return view('thanks');
            }
        }

        
        return view('creditCard', compact('buy', 'user', 'qty', 'id', 'card','cards', 'cc'));
    }

    public function dues()
    {
        return view('dues');
    }

    public function thankForBuying()
    {
        return view('thanks');
    }

        public function moreDetails($id) {
        //$user_id = Auth::user()->id;
        $buy = Buy::find($id);
        
        return view('details', compact('buy'));
    }
}
