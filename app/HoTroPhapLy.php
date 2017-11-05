<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Helper\DataViewer;

class HoTroPhapLy extends Model
{
    protected $table = 'hotrophaply';

    protected $fillable = ['linhvuc_id','doanhnghiep','daidien','sodt','email','diachi','cauhoi','coquan_id','ngaytraloi','cautraloi'];

    public function linhvuc()
    {
        return $this->belongsTo('App\LinhVuc','linhvuc_id','id');
    }

    public function coquan()
    {
        return $this->belongsTo('App\CoQuan','coquan_id','id');
    }

    use DataViewer;

    public static $columns = ['linhvuc','cauhoi','doanhnghiep','ngaytraloi','coquan'];

}
