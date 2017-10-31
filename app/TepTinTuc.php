<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TepTinTuc extends Model
{
    protected $table = 'teptintuc';

    protected $fillable = ['tintuc_id','media_id','path'];
}
