<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DoiThoaiTrucTuyen extends Model
{
    protected $fillable = ['user_id','name','slug','avatar','gioithieu','video'];


    public function user()
    {
        return $this->belongsTo('App\User','user_id','id');
    }
}
