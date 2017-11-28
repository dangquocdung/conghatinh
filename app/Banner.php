<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $table = 'banner';

	protected $fillable = ['user_id','vitri','name','slug','banner','lienket','thutu','daduyet','ghichu'];

	  
	public function user()
	{
	    return $this->belongsTo('App\User','user_id','id');
	}

    public function loaibn()
    {
        return $this->belongsTo('App\LoaiBanner','vitri','id');
    }

    public function chuyenmuc()
    {
        return $this->hasMany('App\ChuyenMuc','banner_id','id');
    }
}
