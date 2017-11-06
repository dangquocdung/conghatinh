<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NguoiPhatNgon extends Model
{
    protected $table = 'nguoiphatngon';

    protected $fillable = ['name','coquan_id','chucdanh','codinh','didong','email'];

    public function coquan()
    {
        return $this->belongsTo('App\CoQuan','coquan_id','id');
    }

    public static $columns = ['id','name','coquan','chucdanh','codinh','didong','email'];
}
