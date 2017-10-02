<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TinTuc extends Model
{
    protected $table = 'tintuc';

	protected $fillable = ['user_id','loaitin_id','name','slug','avatar','gioithieu','noidung','noibat','daduyet','ghichu'];

	public function loaitin()
	{
	  return $this->belongsTo('App\LoaiTin','loaitin_id','id');
	}
	  
	public function user()
	{
	    return $this->belongsTo('App\User','user_id','id');
	}
}
