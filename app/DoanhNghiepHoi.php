<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Helper\DataViewer;

class DoanhNghiepHoi extends Model
{
    protected $table = 'doanhnghiephoi';

    protected $fillable = ['coquan_id','doanhnghiep','daidien','sodt','email','diachi','cauhoi','nguoitraloi','chucvu','ngaytraloi','cautraloi'];

    public function coquan()
    {
        return $this->belongsTo('App\CoQuan','coquan_id','id');
    }

    use DataViewer;

    public static $columns = ['cauhoi','doanhnghiep','ngaytraloi','coquan'];

}


