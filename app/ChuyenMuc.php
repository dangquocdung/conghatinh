<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChuyenMuc extends Model
{
    protected $table = 'chuyen_mucs';

    protected $fillable = ['name','slug','thutu','ghichu'];

    public function loaitin()
	{
		return $this->hasMany('App\LoaiTin','chuyenmuc_id','id');
	}

	public function tintuc()
	{
		return $this->hasManyThrough('App\TinTuc','App\ChuyenMucCon','chuyenmuc_id','chuyenmuccon_id','id');
  	}
}
