<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    protected $fillable = [
        'user_id',
        'category_id',
		'title',
    	'description',
    	'prices',
    	'quantity',
    	'cover',
    	'cover1',
    	'cover2',
    	'cover3',
    ];
}
