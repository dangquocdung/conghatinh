<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HoiDapTrucTuyen extends Model
{
    protected $fillable = ['hoten', 'sodt', 'email', 'diachi', 'cauhoi', 'nguoitraloi','chucvu','cautraloi'];
}
