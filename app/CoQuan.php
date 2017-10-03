<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CoQuan extends Model
{
    protected $table = 'coquan';

    protected $fillable = ['name','slug','nhomcq_id','lienket'];

    public function nhomcq()
    {
        return $this->belongsTo('App\NhomCQ','nhomcq_id','id');
    }
}
