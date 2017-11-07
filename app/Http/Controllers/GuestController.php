<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\TinTuc;
use App\LoaiTin;
use App\ChuyenMuc;
use App\VanBan;
use App\CoQuan;
use App\DoanhNghiepHoi;
use App\LinhVuc;
use App\HoTroPhapLy;
use App\NguoiPhatNgon;
use App\PVTT;

class GuestController extends Controller
{
    public function index()
    {
//        $tinmoi = TinTuc::orderBy('id', 'decs')->take(5)->get();

        

        $tinnoibat = TinTuc::where('daduyet','1')->where('noibat','1')->orderBy('id', 'decs')->take(13)->get();

//        $tinslide = TinTuc::where('daduyet','1')->where('loaitin_id','10')->orderBy('id', 'decs')->take(12)->get();

        $tinvideo = TinTuc::where('daduyet','1')->where('loaitin_id','11')->orderBy('id', 'decs')->take(12)->get();



        // $tintucsukien = TinTuc::where('')->orderBy('id', 'decs')->take(6)->get();

        return view('guest.trang-chu', compact('tinmoi','tinslide','tinvideo','tinnoibat'));
    }

    public function indexEN()
    {
    	App::setLocale('en');

     //    $tinmoi = TinTuc::orderBy('id', 'decs')->take(5)->get();

     //    $tinslide = TinTuc::orderBy('id', 'decs')->take(10)->get();

     //    $tinnoibat = TinTuc::orderBy('id', 'decs')->take(6)->get();

     //    return view('guest.trang-chu', compact('tinmoi','tinslide','tinnoibat'));

    	// $locale = App::getLocale();

		if (App::isLocale('en')) {
		    
		    echo trans('messages.welcome', ['name' => 'dayle']);
		}


    }

    public function tinTuc($slug)
    {
        $tin = TinTuc::where('slug',$slug)->first();

        $ngay = $tin->ngaydang;

        $tinlq_new = TinTuc::orderBy('ngaydang','desc')->take(10)->get();

        $tinlq_old = TinTuc::where('ngaydang','<=', $ngay)->orderBy('ngaydang','desc')->take(10)->get();

        return view('guest.chi-tiet', compact('tin','tinlq_new','tinlq_old'));
    }

    public function tepTin($slug)
    {
        $tin = TinTuc::where('slug',$slug)->first();

        $ngay = $tin->ngaydang;

        $tinlq_new = TinTuc::orderBy('ngaydang','desc')->take(10)->get();

        $tinlq_old = TinTuc::where('ngaydang','<=', $ngay)->orderBy('ngaydang','desc')->take(10)->get();

        return view('guest.chi-tiet', compact('tin','tinlq_new','tinlq_old'));
    }


    public function loaiTin($slug)
    {
        $lt = LoaiTin::where('slug',$slug)->first();

        $tintuc = TinTuc::where('loaitin_id',$lt->id)->where('daduyet','1')->orderby('id','desc')->paginate(12);

        return view('guest.loai-tin', compact('lt','tintuc'));
    }


    public function chuyenMuc($slug)
    {
        $cm = ChuyenMuc::where('slug',$slug)->first();

        $lt = LoaiTin::select('id')->where('chuyenmuc_id',$cm->id)->get();

        $tintuc = TinTuc::whereIn('loaitin_id',$lt)->where('daduyet','1')->orderby('id','desc')->paginate(12);



        // $tintuc = TinTuc::whereIn('loaitin_id',$lt)->orderby('id','desc')->paginate(12);

        // return response()
        //     ->json([
        //         'tintuc' => $tintuc
        //     ]);

        return view('guest.chuyen-muc', compact('cm','tintuc'));
    }

    public function vanBan($slug)
    {
        if ($slug != 'van-ban-qppl'){

            $lt = LoaiTin::where('slug',$slug)->first();



        }else{

            $lt = 'van-ban-qppl';


        }

        return view('guest.van-ban', compact('lt'));
        
    }

    public function getDoanhNghiepHoi()
    {
        $chuyenmuc = ChuyenMuc::all();
        $coquan = CoQuan::orderby('nhomcq_id')->get();
        return view ('guest.doanh-nghiep-hoi',compact('coquan','chuyenmuc'));
    }

    public function getHoTroPhapLy()
    {
        $chuyenmuc = ChuyenMuc::all();
        $linhvuc = Linhvuc::orderby('slug','asc')->get();
        return view ('guest.ho-tro-phap-ly',compact('linhvuc','chuyenmuc'));
    }

    public function getNguoiPhatNgon()
    {
        $chuyenmuc = ChuyenMuc::all();
        $coquan = CoQuan::orderby('nhomcq_id')->get();
        return view ('guest.nguoi-phat-ngon',compact('coquan','chuyenmuc'));
    }

    public function getPhongVienThuongTru()
    {

        $chuyenmuc = ChuyenMuc::all();
        $coquan = CoQuan::orderby('nhomcq_id')->get();
        return view ('guest.phong-vien-thuong-tru',compact('coquan','chuyenmuc'));
    }

    public function tinNoiBat()
    {

        $tintuc = TinTuc::where('daduyet','1')->where('noibat','1')->orderby('id','desc')->paginate(12);

        return view('guest.tin-noi-bat', compact('tintuc'));
    }


    public function getSoDoCong()
    {
        return view('guest.so-do-cong');
    }

    public function apiVanBan($id=null)
    {
        if ($id != null){
            $model = VanBan::where('daduyet','1')->where('loaitin_id',$id)->with('loaitin')->with('linhvuc')->with('tepvanban')->searchPaginateAndOrder();


        }else{
            $model = VanBan::where('daduyet','1')->with('loaitin')->with('linhvuc')->with('tepvanban')->searchPaginateAndOrder();

        }

        $columns = VanBan::$columns;

        return response()
            ->json([
                'model' => $model,
                'columns' => $columns
            ]);
    }

    public function apiDoanhNghiepHoi()
    {

        $model = DoanhNghiepHoi::where('daduyet','0')->with('coquan')->searchPaginateAndOrder();

        $columns = DoanhNghiepHoi::$columns;

        return response()
            ->json([
                'model' => $model,
                'columns' => $columns
            ]);
    }

    public function apiHoTroPhapLy()
    {

//        $model = HoTroPhapLy::where('daduyet','0')->with('coquan')->with('linhvuc')->searchPaginateAndOrder();

        $model = HoTroPhapLy::where('daduyet','0')->with('coquan')->with('linhvuc')->searchPaginateAndOrder();

        $columns = HoTroPhapLy::$columns;

        return response()
            ->json([
                'model' => $model,
                'columns' => $columns
            ]);
    }

    public function apiNguoiPhatNgon()
    {

        $model = NguoiPhatNgon::orderby('id','asc')->with('coquan')->get();

        $columns = NguoiPhatNgon::$columns;

        return response()
            ->json([
                'model' => $model,
                'columns' => $columns
            ]);
    }

    public function apiPhongVienThuongTru()
    {

        $model = PVTT::orderby('id','asc')->get();

        $columns = PVTT::$columns;

        return response()
            ->json([
                'model' => $model,
                'columns' => $columns
            ]);
    }


    // public function apiVanBanCDDH()
    // {
    //     $model = VanBan::where('daduyet','0')->where('loaitin_id','9')->with('loaitin')->with('tepvanban')->searchPaginateAndOrder();

    //     $columns = VanBan::$columns;

    //     return response()
    //         ->json([
    //             'model' => $model,
    //             'columns' => $columns
    //         ]);
    // }

    // public function apiVanBanCB()
    // {
    //     $model = VanBan::where('daduyet','0')->where('loaitin_id','10')->with('loaitin')->with('tepvanban')->searchPaginateAndOrder();

    //     $columns = VanBan::$columns;

    //     return response()
    //         ->json([
    //             'model' => $model,
    //             'columns' => $columns
    //         ]);
    // }


    public function ctVanBan($id)
    {
        $vb = VanBan::find($id);

        // return response()
        //     ->json([
        //         'vanban' => $vb
        //     ]);

        return view('guest.chi-tiet-van-ban', compact('vb'));
    }
}
