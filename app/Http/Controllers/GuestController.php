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

//        $tinslide = TinTuc::orderBy('id', 'decs')->take(13)->get();

        $tinnoibat = TinTuc::orderBy('id', 'decs')->take(13)->get();



        // $tintucsukien = TinTuc::where('')->orderBy('id', 'decs')->take(6)->get();

        return view('guest.trang-chu', compact('tinmoi','tinslide','tinnoibat'));
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

        return view('guest.chi-tiet', compact('tin'));
    }

    public function loaiTin($slug)
    {
        $lt = LoaiTin::where('slug',$slug)->first();

        return view('guest.loai-tin', compact('lt'));
    }

    public function chuyenMuc($slug)
    {
        $cm = ChuyenMuc::where('slug',$slug)->first();

        return view('guest.chuyen-muc', compact('cm'));
    }

    public function vanBan($slug)
    {
        $vb = ChuyenMuc::where('slug',$slug)->first();

        return view('guest.van-ban', compact('vb'));
    }

    public function apiVanBan()
    {
        $model = VanBan::where('daduyet','1')->with('loaitin')->with('tepvanban')->searchPaginateAndOrder();

        $columns = VanBan::$columns;

        return response()
            ->json([
                'model' => $model,
                'columns' => $columns
            ]);
    }

    public function allVanBan()
    {
        $vanban = VanBan::with('tepvanban')->with('loaitin')->get();




        return response()
            ->json([
                'vanban' => $vanban
            ]);
    }
}
