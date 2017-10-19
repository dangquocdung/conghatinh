<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Helper\DataViewer;

class VanBan extends Model
{
    protected $table = 'vanban';

    protected $fillable = ['user_id','loaitin_id','linhvuc_id','sovb','kihieuvb','ngaybanhanh','nguoiki_id','cqbh_id','trichyeu','noibat','daduyet'];

    public function loaitin()
    {
        return $this->belongsTo('App\LoaiTin','loaitin_id','id');
    }

    public function loaivb()
    {
        return $this->belongsTo('App\LoaiVB','loaivb_id','id');
    }

    public function linhvuc()
    {
        return $this->belongsTo('App\LinhVuc','linhvuc_id','id');
    }

    public function user()
    {
        return $this->belongsTo('App\User','user_id','id');
    }

    public function nguoiki()
    {
        return $this->belongsTo('App\NguoiKi','nguoiki_id','id');
    }

    public function tepvanban()
    {
        return $this->hasMany('App\TepVanBan','vanban_id','id');
    }

    use DataViewer;

    public static $columns = ['sovb','ngaybanhanh','loaitin','linhvuc','trichyeu'
//        'id','user_id','loaitin_id','sovb','kihieuvb','ngaybanhanh','nguoiki_id',
//        'trichyeu','noibat','daduyet', 'created_at', 'updated_at'
    ];

}
