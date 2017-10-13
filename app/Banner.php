<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $table = 'banner';

	protected $fillable = ['user_id','name','slug','avatar','banner','lienket','thutu','daduyet','ghichu'];

	  
	public function user()
	{
	    return $this->belongsTo('App\User','user_id','id');
	}
}
