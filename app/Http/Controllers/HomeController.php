<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Sales;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homeStart() {
        $categories = Categories::get();
    	$products = Sales::whereIn('id', [1, 5, 6, 9, 13, 15, 17, 21])->get();
    	
        return view('home', compact('products', 'categories'));
    }

    public function categories($id) {
        $categories = Categories::find($id)->get();

        $id_category = Sales::where('category_id', '>=', "$categories");

        return view('categories', compact('id_category'));
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
        $category_id = $request->get('category');

    	$query = Sales::query();

    	$keywords = explode(' ', $title);

    	foreach ($keywords as $keyword) {
    		$query->where('title', 'LIKE', "%$keyword%");
    	}

    	if (! empty($category_id)) {
            $query->where('category_id', $category_id);
        }

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
