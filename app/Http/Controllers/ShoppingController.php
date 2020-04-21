<?php

namespace App\Http\Controllers;

use App\Address;
use App\Addresses;
use App\Buy;
use App\Card;
use App\Http\Requests\BuyRequest;
use App\Payment;
use App\Purchases;
use App\Sales;
use App\Shipping;
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

    public function moreDetails($id) {
        $buy = Buy::find($id);  
        return view('details', compact('buy'));
    }

    public function buy(Request $request) {
        $user = Auth::user();

        $buy = Sales::find($request->id);

        $address = Address::where('user_id',$user->id)
            ->where('current', true)
            ->first();

        $addresses = Address::where('user_id',$user->id)->get();
        $shipping_methods = Shipping::get();

        $qty = $request->qty;
        $id = $request->id;
        $sm = $request->sm;

    	return view('buy', compact('buy', 'user', 'qty', 'id', 'address','addresses', 'shipping_methods', 'sm'));
    }

    public function toBuy(BuyRequest $request) {
    	$product = $request->all();
		$toBuy = Buy::create($product);

    	//return redirect()->route('sales');
    }

    public function makeSale(Request $request) {
        return redirect()->route('creditCard', [ 'id'=> $request->id, 'qty' => $request->qty, 'sm'=> $request->sm, ]);
    }

    public function makeOrder(Request $request) {        
        $id = $request->id;
        $qty = $request->qty;
        $sm = $request->sm;
        $user = Auth::user();

        $buyerId = Auth::user()->id;
        $publication = Sales::find($request->id);

        $address = Address::where('user_id',$user->id)
            ->where('current', true)
            ->first();

        Buy::create([
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
            $updateSales = Sales::where([
                'id' => $id
            ])
            ->update(['quantity' => $publication->quantity - $qty]);

        return view('thanks');
    }

    public function thankForBuying()
    {
        return view('thanks');
    }

}
