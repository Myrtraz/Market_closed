<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
    	'user_id',
    	'publish_id',
    	'comment_respond_id',
    	'comment',
    ];
}
