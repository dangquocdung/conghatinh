<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoaiTin extends Model
{
    protected $table = 'chuyen_muc_cons';

    protected $fillable = ['name','slug','thutu','chuyenmuc_id','ghichu'];

    public function tintuc()
	{
	return $this->hasMany('App\TinTuc','chuyenmuccon_id','id');
	}

	public function chuyenmuc()
	{
	return $this->belongsTo('App\ChuyenMuc','chuyenmuc_id','id');
  	}
}
