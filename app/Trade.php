<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trade extends Model
{
    protected $fillable = [
    	'id',
    	'product_id',
    	'user_id',
    	'method_exchange',
    	'quantity',
    	'offer'
    ];
}
