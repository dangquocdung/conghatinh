<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LichCongTac extends Model
{
    protected $fillable=['user_id','thang','noidung','media_id'];

    public function user()
    {
        return $this->belongsTo('App\User','user_id','id');
    }

    public function media()
    {
        return $this->belongsTo('App\Media','media_id','id');
    }
}
