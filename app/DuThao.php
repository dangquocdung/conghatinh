<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DuThao extends Model
{
    protected $table = 'duthaovanban';

    protected $fillable = ['user_id','name','slug','path_file','thoihan'];


    public function user()
    {
        return $this->belongsTo('App\User','user_id','id');
    }

    public function gopy()
    {
        return $this->hasMany('App\GopYDuThao','duthao_id','id');
    }
}
