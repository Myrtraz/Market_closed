<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buy extends Model
{
    protected $fillable = [
		'buyer_id',
        'address_id',
		'seller_id',
		'publish_id',
        'payment_method_id',
        'shipping_id',
        'purchase_id',
		'status',
		'quantity',
		'total'
    ];

    public function publication()
    {
    	return $this->belongsTo('App\Sales', 'publish_id');
    }

    public function buyer()
    {
        return $this->belongsTo('App\User', 'buyer_id');
    }

    public function seller()
    {
    	return $this->belongsTo('App\User', 'seller_id');
    }

    public function address()
    {
        return $this->belongsTo('App\Address', 'address_id');
    }

    public function payment_method()
    {
        return $this->belongsTo('App\Payment', 'payment_method_id');
    }

    public function purchases()
    {
        return $this->belongsTo('App\Purchases', 'purchase_id');
    }
}
