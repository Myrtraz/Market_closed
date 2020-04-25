<?php

namespace App\Http\Controllers;

use App\Buy;
use App\Message;
use App\Sales;
use Auth;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function messageIndex($id) {
        $messages = Message::where('buy_id', $id)->get();

        Message::where([
            'user_receive_id' => Auth::user()->id,
            'is_readed' => false,
            'buy_id' => $id
        ])->update(['is_readed' => true]);
    	
        return view('message', compact('id', 'messages'));
    }

    public function sendMessage(Request $request, $id) {
    	$user_sender_id = Auth::user()->id;
        $buy = Buy::find($id);

        $user_receive_id = $buy->seller_id;

        if ($buy->seller_id == $user_sender_id)  {
            $user_receive_id = $buy->buyer_id;
        }

    	$sendMessage = Message::create([
    		'user_sender_id' => $user_sender_id,
    		'user_receive_id' => $user_receive_id,
    		'buy_id' => $id,
    		'message' => $request->message,
    		'is_readed' => false,
    	]);

    	return redirect()->back();
    }
}
