<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NhomCQ extends Model
{
    protected $table = 'nhomcq';

    protected $fillable = ['name','slug'];

    public function coquan ()
    {
        return $this->hasMany('App\CoQuan','nhomcq_id','id');
    }
}
