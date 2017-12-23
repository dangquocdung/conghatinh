<?php

namespace App;

use App\Helper\VanBanViewer;
use Illuminate\Database\Eloquent\Model;

class VanBan extends Model
{
    protected $table = 'vanban';

    protected $fillable = ['user_id','loaitin_id','kihieuvb','ngaybanhanh','nguoiki_id','trichyeu','noibat','daduyet'];

    public function loaitin()
    {
        return $this->belongsTo('App\LoaiTin','loaitin_id','id');
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

    use VanBanViewer;

    public static $columns = ['kihieuvb','ngaybanhanh','loaitin','trichyeu'
//        'id','user_id','loaitin_id','sovb','kihieuvb','ngaybanhanh','nguoiki_id',
//        'trichyeu','noibat','daduyet', 'created_at', 'updated_at'
    ];

}
