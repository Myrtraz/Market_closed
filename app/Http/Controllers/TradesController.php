<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Sales;
use App\Trades;

class TradesController extends Controller
{
    public function tradesIndex() {

    	$user = Auth::user()->id;
        $myTrades = Sales::where('user_id', $user)
        ->where('to_exchange', true)
        ->get();

        //$isProductOwner = Sales::where('user_id', $user_id)
        //->where('id', $id)
        //->count() > 0;
        
    	return view('trades', compact('myTrades'));
    }

    public function trading() {

    	$trading = Trades::where('user_id', $user_id)
        ->where('id', $id)
        ->update([
            'offer' => true,
        ]);

        return redirect()->route('trades');
    }

    public function declineTrading($id) {
		$user_id = Auth::user()->id;
        
        $decline = Trades::where('user_id', $user_id)
        ->update([
            'offer' => false
        ]);
        
         return redirect()->route('trades');
    }
}