<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhimTat extends Model
{
    protected $table = 'phimtat';

    protected $fillable = ['name','icon','link','thutu'];
}
