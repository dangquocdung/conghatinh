<?php

namespace App\Http\Controllers;

use App\LichCongTac;
use Illuminate\Http\Request;
use App\Media;

use App\NhomCQ;
use App\PhimTat;
use App\ChuyenMuc;
use App\Banner;

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
        $lichct = LichCongTac::orderby('id','desc')->get();

        return view('admin.pages.lich-cong-tac',compact('lichct'));
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

        $pdf = Media::whereIn('aggregate_type',['pdf','document','spreadsheet'])->orderby('id','desc')->get();
        return response()->json($pdf);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        LichCongTac::create($request->all());

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
