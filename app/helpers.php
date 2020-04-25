<?php

function notificationCount() {
	$userId = Auth::user()->id;
	$notificationCount =  App\Message::where([
    	'user_receive_id' => $userId,
    	'is_readed' => false
    	])->count();

	return $notificationCount;
}