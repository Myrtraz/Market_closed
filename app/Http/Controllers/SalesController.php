<?php

namespace App\Http\Controllers;

use App\Buy;
use App\Categories;
use App\Http\Requests\AddProduct;
use App\RemoteRepositories\ImgurRemoteRepository;
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
        $categories = Categories::get();
    	return view('addProduct', compact('categories'));
    }

    public function toSell(Request $request){
        $user_id = Auth::user()->id;
    	$title = $request->title;
        $description = $request->description;
        $category_id = $request->category_id;
        $prices = $request->prices;
        $quantity = $request->quantity;
        $status = $request->status;
        $cover = $this->upload($request->file('cover'));
        $cover1 = $this->upload($request->file('cover1'));
        $cover2 = $this->upload($request->file('cover2'));
        $cover3 = $this->upload($request->file('cover3'));
        $to_exchange =  $request->to_exchange == "on";


		$toSell = Sales::create([
            'user_id' => $user_id,
            'title' => $title,
            'description' => $description,
            'category_id' => $category_id,
            'prices' => $prices,
            'quantity' => $quantity,
            'status' => $status,
            'cover' => $cover,
            'cover1' => $cover1,
            'cover2' => $cover2,
            'cover3' => $cover3,
            'to_exchange' => $to_exchange,
        ]);


    	return redirect()->route('myProducts');
    }

    private function upload($file) {
        if (is_null($file)) {
            return null;
        }

        $img = new \stdClass;
        $img->tmp_name = $file->getPathName();
        $img->type = 'image/'. $file->extension();
        $img->size = $file->getSize();
        return ImgurRemoteRepository::upload($img);
    }
}
