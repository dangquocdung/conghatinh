<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChuyenMuc extends Model
{
    protected $table = 'chuyenmuc';

    protected $fillable = ['name','slug','thutu','anhien','ghichu','banner_id'];

    public function loaitin()
	{
		return $this->hasMany('App\LoaiTin','chuyenmuc_id','id');
	}



	public function tintuc()
	{
		return $this->hasManyThrough('App\TinTuc','App\LoaiTin','chuyenmuc_id','loaitin_id','id');
  	}

    public function vanban()
    {
        return $this->hasManyThrough('App\VanBan','App\LoaiTin','chuyenmuc_id','loaitin_id','id');
    }

    public function lichct()
    {
        return $this->hasManyThrough('App\LichCongTac','App\LoaiTin','chuyenmuc_id','loaitin_id','id');
    }

}
