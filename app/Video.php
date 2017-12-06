<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $dates = [
        'converted_for_downloading_at',
        'converted_for_streaming_at',
    ];

    protected $guarded = [];

    public function loaivideo()
    {
        return $this->belongsTo('App\LoaiVideo','loaivideo_id','id');
    }
}
