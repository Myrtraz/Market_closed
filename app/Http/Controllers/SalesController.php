<?php

namespace App\Http\Controllers;

use App\Buy;
use App\Http\Requests\AddProduct;
use App\Sales;
use Auth;
use Illuminate\Http\Request;

class SalesController extends Controller
{
    public function sales()
    {
        $user_id = Auth::user()->id;
        $vendor = Buy::where('seller_id', $user_id)->get();
        return view('sales', compact('vendor'));
    }

    public function myProducts() {
        $user = Auth::user()->id;
        $myProducts = Sales::where('user_id', $user)->get();
        return view('myProducts', compact('myProducts'));
    }

    public function product() {
    	return view('addProduct');
    }

    public function resume(Request $request)
    {
        return redirect()->route('buy', $request->only('id', 'qty'));
    }

    public function toSell(AddProduct $request){
        $user_id = Auth::user()->id;
    	$title = $request->title;
        $description = $request->description;
        $prices = $request->prices;
        $quantity = $request->quantity;
        $cover = $request->cover;


		$toSell = Sales::create([
            'user_id' => $user_id,
            'title' => $title,
            'description' => $description,
            'prices' => $prices,
            'quantity' => $quantity,
            'cover' => $cover,
        ]);

    	return redirect()->route('myProducts');
    }
}
