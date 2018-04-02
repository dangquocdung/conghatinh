<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Feed\Feedable;
use Spatie\Feed\FeedItem;

class TinTuc extends Model implements Feedable
{
    protected $table = 'tintuc';

	protected $fillable = ['user_id','loaitin_id','name','slug','avatar','gioithieu','noidung','noibat','daduyet','ghichu','tacgia','nguon','ngaydang'];

	public function loaitin()
	{
	  return $this->belongsTo('App\LoaiTin','loaitin_id','id');
	}

    public function chuyenmuc()
    {
        return $this->belongsTo('App\LoaiTin','loaitin_id','id');
    }

	public function user()
	{
	    return $this->belongsTo('App\User','user_id','id');
	}

    public function teptintuc()
    {
        return $this->hasMany('App\TepTinTuc','tintuc_id','id');
    }

    public function toFeedItem()
    {
        return FeedItem::create()
            ->id($this->id)
            ->title($this->name)
            ->summary($this->gioithieu)
            ->updated($this->updated_at)
            ->link('chi-tiet/'.$this->slug)
            ->author($this->user->name);
    }

    public static function getFeedItems()
    {

        // return TinTuc::where('daduyet','1')->where('loaitin_id','1')->orderby('id','desc')->take(20)->get();

        return TinTuc::where('daduyet',1)->whereIn('loaitin_id',array(32,33,35,69,77,78,79,80))->get();
    }
}
