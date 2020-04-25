<?php

namespace App\Http\Controllers;

use App\Buy;
use App\Categories;
use App\Comment;
use App\Sales;
use Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homeStart() {
        $user = Auth::user();
        $categories = Categories::get();
    	$products = Sales::get();
    	
        return view('home', compact('products', 'categories', 'user'));
    }

    public function categories($id) {
        $categories = Categories::find($id)->get();

        $id_category = Sales::where('category_id', '>=', "$categories");

        return view('categories', compact('id_category'));
    }

    public function product($id) {
    	$product = Sales::find($id);
        $comments = Comment::where('publish_id', $product->id)->get();
        $buy = Buy::get();

        if (! is_null($buy)) {
            $buySum = Buy::where('publish_id', $product->id)->sum('quantity');
            $buySum = 'Vendidos' . ' ' . $buySum;

        }
    	return view('product', compact('product', 'buySum', 'id', 'comments'));
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
