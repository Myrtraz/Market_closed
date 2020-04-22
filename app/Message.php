<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = [
    	'user_sender_id',
    	'user_receive_id',
    	'buy_id',
    	'message',
    	'is_readed',
    ];

    public function sender()
    {
    	return $this->belongsTo('App\User', 'user_sender_id');
    }

    public function receive()
    {
    	return $this->belongsTo('App\User', 'user_receive_id');
    }
}
