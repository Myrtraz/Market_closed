<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sold extends Model
{
	protected $fillable = [
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
