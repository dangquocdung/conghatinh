<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TinTuc;
use App\LoaiTin;
use App\ChuyenMuc;
use App\VanBan;

class GuestController extends Controller
{
    public function index()
    {
//        $tinmoi = TinTuc::orderBy('id', 'decs')->take(5)->get();

        

        $tinnoibat = TinTuc::orderBy('id', 'decs')->take(13)->get();

        $tinslide = TinTuc::where('loaitin_id','10')->orderBy('id', 'decs')->take(12)->get();

        $tinvideo = TinTuc::where('loaitin_id','11')->orderBy('id', 'decs')->take(12)->get();



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

    public function loaiTin($slug)
    {
        $lt = LoaiTin::where('slug',$slug)->first();

        $tintuc = TinTuc::where('loaitin_id',$lt->id)->orderby('id','desc')->paginate(12);

        return view('guest.loai-tin', compact('lt','tintuc'));
    }

    public function chuyenMuc($slug)
    {
        $cm = ChuyenMuc::where('slug',$slug)->first();

        $lt = LoaiTin::select('id')->where('chuyenmuc_id',$cm->id)->get();

        $tintuc = TinTuc::whereIn('loaitin_id',$lt)->orderby('id','desc')->paginate(12);



        // $tintuc = TinTuc::whereIn('loaitin_id',$lt)->orderby('id','desc')->paginate(12);

        // return response()
        //     ->json([
        //         'tintuc' => $tintuc
        //     ]);

        return view('guest.chuyen-muc', compact('cm','tintuc'));
    }

    public function vanBan($slug='van-ban')
    {
        if ($slug != 'van-ban'){

            $lt = LoaiTin::where('slug',$slug)->first();

            

        }else{

            $lt = 'van-ban';


        }

        return view('guest.van-ban', compact('lt'));
        
    }

    public function apiVanBan($id=null)
    {
        if ($id != null){
            $model = VanBan::where('daduyet','0')->where('loaitin_id',$id)->with('loaitin')->with('linhvuc')->with('tepvanban')->searchPaginateAndOrder();


        }else{
            $model = VanBan::where('daduyet','0')->with('loaitin')->with('linhvuc')->with('tepvanban')->searchPaginateAndOrder();

        }

        $columns = VanBan::$columns;

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
