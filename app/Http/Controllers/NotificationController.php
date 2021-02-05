<?php

namespace App\Http\Controllers;

use App\Buy;
use App\Message;
use Illuminate\Http\Request;
use Auth;

class NotificationController extends Controller
{
    public function notificationIndex() {
    	$userId = Auth::user()->id;

    	$buyIdsForPendingMessagesForRead = Message::where([
    		'user_receive_id' => $userId,
    		'is_readed' => false
    	])->get()->pluck('buy_id')->toArray();

    	$buyIds = array_unique($buyIdsForPendingMessagesForRead);

    	$shoppings = Buy::whereIn('id', $buyIds)->get();
    	return view('notification', compact('shoppings'));
    }
}
