<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoaiTin extends Model
{
    protected $table = 'loaitin';

    protected $fillable = ['name','slug','thutu','chuyenmuc_id','ghichu'];

    public function tintuc()
	{
	return $this->hasMany('App\TinTuc','loaitin_id','id');
	}

    public function vanban()
    {
        return $this->hasMany('App\VanBan','loaitin_id','id');
    }

	public function chuyenmuc()
	{
	return $this->belongsTo('App\ChuyenMuc','chuyenmuc_id','id');
  	}
}
