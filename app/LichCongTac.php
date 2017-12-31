<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LichCongTac extends Model
{
    protected $fillable=['user_id','name','slug','noidung','loaitin_id'];

    public function user()
    {
        return $this->belongsTo('App\User','user_id','id');
    }

    public function loaitin()
    {
        return $this->belongsTo('App\LoaiTin','loaitin_id','id');
    }

    public function tepvanbankhac()
    {
        return $this->hasMany('App\TepVanBanKhac','vanbankhac_id','id');
    }
}
