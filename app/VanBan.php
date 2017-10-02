<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VanBan extends Model
{
    protected $table = 'vanban';

    protected $fillable = ['user_id','loaitin_id','name','slug','vanban','gioithieu','noidung','noibat','daduyet','ghichu'];

    public function loaitin()
    {
        return $this->belongsTo('App\LoaiTin','loaitin_id','id');
    }

    public function user()
    {
        return $this->belongsTo('App\User','user_id','id');
    }
}
