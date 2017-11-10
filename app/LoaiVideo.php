<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoaiVideo extends Model
{
    protected $table = 'loaivideo';

    public function video()
    {
        return $this->hasMany('App\Video','loaivideo_id','id');
    }
}
