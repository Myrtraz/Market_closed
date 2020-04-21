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

    public function cards()
    {
        return $this->belongsTo('App\Card', 'card_id');
    }
}
