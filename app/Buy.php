<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buy extends Model
{
    protected $fillable = [
		'buyer_id'
		'seller_id'
		'publish_id'
		'status'
		'quantity'
		'total'
    ];
}
