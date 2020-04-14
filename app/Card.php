<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    protected $fillable = [
    	'user_id',
        'cardName',
		'creditCard',
    	'type',
    	'cvv',
    	'exp',
    	'exp2',
    	'current'
    ];
}
