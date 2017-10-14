<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TopPic extends Model
{
    protected $table = 'toppic';

    protected $fillable = ['user_id','hinhanh','thutu'];

    public function user()
	{
	    return $this->belongsTo('App\User','user_id','id');
	}
}
