<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LienKet extends Model
{
    protected $table = 'lienket';

	protected $fillable = ['user_id','name','slug','avatar','thutu','daduyet','ghichu'];

	  
	public function user()
	{
	    return $this->belongsTo('App\User','user_id','id');
	}
}
