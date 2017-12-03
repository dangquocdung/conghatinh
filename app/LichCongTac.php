<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LichCongTac extends Model
{
    protected $fillable=['user_id','thang','noidung','tepdinhkem'];

    public function user()
    {
        return $this->belongsTo('App\User','user_id','id');
    }
}
