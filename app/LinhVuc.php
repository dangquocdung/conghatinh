<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LinhVuc extends Model
{
    protected $table = 'linhvuc';

    public function vanban()
    {
        return $this->hasMany('App\VanBan','linhvuc_id','id');
    }
}
