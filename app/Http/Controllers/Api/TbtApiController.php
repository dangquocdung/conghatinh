<?php
/**
 * Created by PhpStorm.
 * User: amitavroy
 * Date: 03/03/17
 * Time: 9:53 AM
 */

namespace App\Http\Controllers\Api;



use App\Events\User\ChuyenMucDeleted;
use App\Events\User\LoaiTinDeleted;
use App\Http\Controllers\Controller;
use App\Services\User\UserImport;
use App\TempTable;
use App\TopPic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\ChuyenMuc;
use App\LoaiTin;

class TbtApiController extends Controller
{
    public function postDeleteChuyenMuc(Request $request)
    {
        $chuyenMucId = $request->input('id');

        // if ($roleId == 1 || $roleId == 2) {
        //     abort(403, 'You cannot edit this role.');
        // }

        // this is only done to get the role name
        $chuyenmuc = ChuyenMuc::find($chuyenMucId);

        DB::table('chuyenmuc')->where('id', $chuyenMucId)->delete();

        event(new ChuyenMucDeleted($chuyenmuc));
        
        return response(['data' => 'Chuyên mục đã bị xoá'], 200);
    }


    public function postDeleteLoaiTin(Request $request)
    {
        $loaiTinId = $request->input('id');

        // if ($roleId == 1 || $roleId == 2) {
        //     abort(403, 'You cannot edit this role.');
        // }

        // this is only done to get the role name
        $loaitin = LoaiTin::find($loaiTinId);

        

        DB::table('loaitin')->where('id', $loaiTinId)->delete();

        event(new LoaiTinDeleted($loaitin));
        
        return response(['data' => 'Loại tin đã bị xoá'], 200);
    }

    public function postDeleteTopPic(Request $request)
    {
        $loaiTinId = $request->input('id');

        // if ($roleId == 1 || $roleId == 2) {
        //     abort(403, 'You cannot edit this role.');
        // }

        // this is only done to get the role name
        $loaitin = TopPic::find($loaiTinId);



        DB::table('toppic')->where('id', $loaiTinId)->delete();

//        event(new LoaiTinDeleted($loaitin));

        return response(['data' => 'Banner đã bị xoá'], 200);
    }
    
}