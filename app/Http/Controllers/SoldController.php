<?php

namespace App\Http\Controllers;

use App\Buy;
use App\Http\Requests\AddProduct;
use App\Http\Requests\BuyRequest;
use App\Sold;
use Illuminate\Http\Request;

class SoldController extends Controller
{
    public function product() {
    	return view('addProduct');
    }

    public function buy() {
    	return view('buy');
    }

    public function toBuy(BuyRequest $request) {
    	$product = $request->all();
		$toBuy = Buy::create($product);

    	//return redirect()->route('sales');
    }

    public function toSell(AddProduct $request){
    	$product = $request->all();
		$toSell = Sold::create($product);

    	return redirect()->route('sales');
    }
}
