<?php

namespace App\Http\Controllers;

use App\Buy;
use App\Http\Requests\AddProduct;
use App\Http\Requests\BuyRequest;
use App\Sales;
use App\User;
use Illuminate\Http\Request;
use Auth;

class SoldController extends Controller
{
    public function product() {
    	return view('addProduct');
    }

    public function resume(Request $request)
    {
        return redirect()->route('buy', $request->only('id', 'qty'));
    }

    public function buy($id, $qty) {
        $user = Auth::user();

        $buy = Sales::find($id);
    	return view('buy', compact('buy', 'user', 'qty'));
    }

    public function toBuy(BuyRequest $request) {
    	$product = $request->all();
		$toBuy = Buy::create($product);

    	//return redirect()->route('sales');
    }

    public function toSell(AddProduct $request){
    	$product = $request->all();
		$toSell = Sales::create($product);

    	return redirect()->route('sales');
    }
}
