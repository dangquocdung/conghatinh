<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PVTT extends Model
{
    protected $table = 'pvtt';

//    protected $fillable = ['name','coquan_id','chucdanh','codinh','didong','email'];

    public static $columns = ['id','cqbc','pvtt','sothe','dienthoai','email','diachi','cqcq','dcts'];
}
