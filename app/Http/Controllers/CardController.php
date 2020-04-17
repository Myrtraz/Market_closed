<?php

namespace App\Http\Controllers;

use App\Card;
use App\Http\Requests\cardAddRequest;
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

    public function secretCode()
    {
        return view('cvvCode');
    }
}
