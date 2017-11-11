<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $table = 'video';

    protected $fillable = ['ngayphat','src','loaivideo_id'];


    public function loaivideo()
    {
        return $this->belongsTo('App\LoaiVideo','loaivideo_id','id');
    }
}
