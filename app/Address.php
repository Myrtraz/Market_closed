<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
	protected $fillable = [
		'user_id',
		'state',
		'city',
		'career',
		'streetNumber',
		'street',
		'street2',
		'additionalData',
		'current',
    ];

}
