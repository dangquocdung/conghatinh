<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GopYDuThao extends Model
{
    protected $table = 'gopyduthao';

    protected $fillable = ['duthao_id', 'hoten','sodt','email','diachi','noidung','daduyet'];

    public function duthao()
    {
        return $this->belongsTo('App\DuThao','duthao_id','id');
    }
}
