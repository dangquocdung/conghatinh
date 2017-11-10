<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $table = 'video';

    protected $fillable = ['name','slug','gioithieu','src','loaivideo_id','ghichu'];


    public function loaivideo()
    {
        return $this->belongsTo('App\LoaiVideo','loaivideo_id','id');
    }
}
