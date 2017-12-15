<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ThongTinDoanhNghiep extends Model
{
    //

    protected $fillable=['name','diachi','masothue','ngaythanhlap','coquan_id'];

    public function coquan()
    {
        return $this->belongsTo('App\CoQuan','coquan_id','id');
    }

}
