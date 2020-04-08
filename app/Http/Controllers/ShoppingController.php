<?php

namespace App\Http\Controllers;

use App\Address;
use App\Addresses;
use App\Buy;
use App\Http\Requests\BuyRequest;
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

    public function moreDetails()
    {
        return view('details');
    }

    public function buy($id, $qty) {
        $user = Auth::user();

        $buy = Sales::find($id);

        $address = Address::where('user_id',$user->id)
            ->where('current', true)
            ->first();

        $addresses = Address::where('user_id',$user->id)->get();

    	return view('buy', compact('buy', 'user', 'qty', 'id', 'address','addresses'));
    }

    public function toBuy(BuyRequest $request) {
    	$product = $request->all();
		$toBuy = Buy::create($product);

    	//return redirect()->route('sales');
    }

    public function makeSale(Request $request) {
        $request->id;
        $request->qty;

        $buyerId = Auth::user()->id;
        $publication = Sales::find($request->id);

        Buy::create([
            'buyer_id' => $buyerId,
            'seller_id' => $publication->user_id,
            'publish_id' => $publication->id,
            'status' => 'create',
            'quantity' => $request->qty,
            'total' => $request->qty * $publication->prices
        ]);

        return redirect()->route('thanks');
    }

    public function thankForBuying()
    {
        return view('thanks');
    }
}
