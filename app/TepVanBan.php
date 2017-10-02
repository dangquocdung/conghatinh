<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TepVanBan extends Model
{
    protected $table = 'tepvanban';

    protected $fillable = ['vanban_id','media_id','path'];
}
