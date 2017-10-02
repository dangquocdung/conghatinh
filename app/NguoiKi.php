<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NguoiKi extends Model
{
    protected $table = 'nguoiki';

    protected $fillable = ['name','slug','hoatdong','ghichu','cqbh_id'];

    public function vanban()
    {
        return $this->hasMany('App\VanBan','nguoiki_id','id');
    }
}
