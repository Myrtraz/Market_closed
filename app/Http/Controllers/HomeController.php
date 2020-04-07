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

    public function searchBar(Request $request)
    {
    	$title = $request->get('title');
    	$min = $request->get('min');
    	$max = $request->get('max');

    	$query = Sales::query();

    	$keywords = explode(' ', $title);

    	foreach ($keywords as $keyword) {
    		$query->where('title', 'LIKE', "%$keyword%");
    	}

    	//

    	if (! empty($min)) {
    		$query->where('prices', '>=', $min);
    	}

    	if (! empty($max)) {
    		$query->where('prices', '<=', $max);
    	}

    	$search = $query->get();

    	if (is_null($search)) {
    		return redirect()->to('/');
    	}

    	return view('search', compact('search', 'title'));
    }

}
