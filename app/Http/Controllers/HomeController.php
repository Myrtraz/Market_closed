<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homeStart() {
    	return view('home');
    }

    public function product() {
    	return view('product');
    }

    public function sales() {
    	return view('sales');
    }
}
