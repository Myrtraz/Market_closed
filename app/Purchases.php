<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchases extends Model
{
    protected $fillable = [
    	'user_id',
    	'buy_id',
    	'card_id',
    	'duesQty',
    	'amount',
    ];
}
