<?php

namespace App\Http\Controllers;

use App\Comment;
use Auth;
use Illuminate\Http\Request;

class CommentController extends Controller {
  	
  	public function createComment(Request $request) {
  		$user_id = Auth::user()->id;
 
  		$createComment = Comment::create([
  			'user_id' => $user_id,
  			'publish_id' => $request->id,
  			'comment' => $request->comment,
  		]);

  	  	return redirect()->back();
  	}  

  	public function sellerComments() {
  		# code...
  	}
}
