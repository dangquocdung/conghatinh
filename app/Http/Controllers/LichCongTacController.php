<?php

namespace App\Http\Controllers;

use App\LichCongTac;
use Illuminate\Http\Request;
use App\Media;

use App\NhomCQ;
use App\PhimTat;
use App\ChuyenMuc;
use App\Banner;
use Illuminate\Support\Facades\Auth;

class LichCongTacController extends Controller
{
    public function __construct()
    {

        $chuyenmuc = ChuyenMuc::orderby('thutu','asc')->get();
        $nhomcq = NhomCQ::orderby('id')->get();
        $banner = Banner::orderby('thutu','asc')->get();
        $phimtat = PhimTat::orderby('thutu','asc')->get();

        $pdfs = Media::whereIn('aggregate_type',['pdf','document','spreadsheet'])->orderby('id','desc')->get();

        view()->share('chuyenmuc',$chuyenmuc);
        view()->share('nhomcq',$nhomcq);
        view()->share('banner',$banner);
        view()->share('phimtat',$phimtat);
        view()->share('pdfs',$pdfs);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
//        $lichct = LichCongTac::orderby('id','desc')->get();

        return view('admin.pages.lich-cong-tac');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.pages.lich-cong-tac-create');
    }

    public function jsonTepDinhKem(){

        $pdf = Media::whereIn('aggregate_type',['pdf','document','spreadsheet'])->orderby('id','desc')->take(12)->get();
        return response()->json($pdf);

    }

    public function jsonHinhAnh(){

        $ha = Media::where('aggregate_type','image')->orderby('id','desc')->take(12)->get();
        return response()->json($ha);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $lct = new LichCongTac;

        $lct->user_id = Auth::user()->id;
        $lct->noidung = $request->noidung;
        $lct->media_id = $request->media_id;
        $lct->loaitin_id = $request->loaitin_id;
        $lct->name = $request->name;
        $lct->slug = str_slug($request->name);

        $lct->save;

        flash('Tạo lịch công tác thành công!');

        return redirect()->route('lich-cong-tac.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\LichCongTac  $lichCongTac
     * @return \Illuminate\Http\Response
     */
    public function show(LichCongTac $lichCongTac)
    {


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\LichCongTac  $lichCongTac
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lct=LichCongTac::find($id);

        return view('admin.pages.lich-cong-tac-edit',compact('lct'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\LichCongTac  $lichCongTac
     * @return \Illuminate\Http\Response
     */
        public function update(Request $request, $id)
        {

            LichCongTac::find($id)->update($request->all());

            flash('Sửa lịch công tác thành công!');

            return redirect()->route('lich-cong-tac.index');


        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\LichCongTac  $lichCongTac
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        LichCongTac::destroy($id);
        flash('Xóa thành công!');
        return redirect()->back();
    }
}
