<?php

namespace App\Http\Controllers;

use App\Sales;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homeStart() {
    	$products = Sales::get()->all();
    	return view('home', compact('products'));
    }

    public function product($id) {
    	$product = Sales::find($id);
    	return view('product', compact('product'));
    }

    public function sales() {
    	return view('sales');
    }
}
