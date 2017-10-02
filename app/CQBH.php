<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CQBH extends Model
{
    protected $table = 'cqbh';

    protected $fillable = ['name','slug','hoatdong','ghichu'];

    public function nguoiki()
    {
        return $this->hasMany('App\NguoiKi','cqbh_id','id');
    }
}
