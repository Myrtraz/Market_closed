<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buy extends Model
{
    protected $fillable = [
		'buyer_id',
		'seller_id',
		'publish_id',
		'status',
		'quantity',
		'total'
    ];

    public function publication()
    {
    	return $this->belongsTo('App\Sales', 'publish_id');
    }

    public function seller()
    {
    	return $this->belongsTo('App\User', 'seller_id');
    }
}
