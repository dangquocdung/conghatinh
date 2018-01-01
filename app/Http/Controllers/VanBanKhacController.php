<?php

namespace App\Http\Controllers;

use App\LichCongTac;
use Illuminate\Http\Request;
use App\Media;

use App\NhomCQ;
use App\PhimTat;
use App\ChuyenMuc;
use App\Banner;

use Auth;
use Carbon\Carbon;

use App\TepVanBanKhac;

class VanBanKhacController extends Controller
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
    public function index($slug=null)
    {
        //
//        $lichct = LichCongTac::orderby('id','desc')->get();

        return view('admin.pages.van-ban-khac',compact('slug'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.pages.van-ban-khac-create');
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

        $vb = new LichCongTac;

        $vb->user_id = Auth::user()->id;
        $vb->loaitin_id = $request->loaitin_id;
        $vb->name = $request->name;
        $vb->slug = str_slug($request->name);
        $vb->ngaybanhanh = Carbon::parse($request->ngaybanhanh);
        $vb->noidung = $request->noidung;
        $vb->save();

        $vbid = $vb->id;


        $tvbs = $request->input('tepvanbankhac');

        if ($tvbs) {


            TepVanBanKhac::where('vanbankhac_id', $vbid)->delete();


            foreach ($tvbs as $tvb) {

                $path = Media::find($tvb);

                $tvbn = new TepVanBanKhac;

                $tvbn->vanbankhac_id = $vbid;

                $tvbn->media_id = $tvb;

                $tvbn->path = $path->directory . '/' . $path->filename . '.' . $path->extension;

                $tvbn->save();
            }
        }

//        return response()->json($tvbs);


        flash('Tạo văn bản thành công!');

        return redirect()->route('index-van-ban-khac');
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

        $tepvanbankhac = TepVanBanKhac::where('vanbankhac_id',$lct->id)->get();


        return view('admin.pages.van-ban-khac-edit',compact('lct','tepvanbankhac'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\LichCongTac  $lichCongTac
     * @return \Illuminate\Http\Response
     */
        public function update(Request $request)
        {
            $vb = LichCongTac::find($request->vbedit);

            $vb->loaitin_id = $request->loaitin_id;
            $vb->name = $request->name;
            $vb->slug = str_slug($request->name);
            $vb->ngaybanhanh = Carbon::parse($request->ngaybanhanh);
            $vb->noidung = $request->noidung;

            $vb->save();

            $vbid = $vb->id;


            $tvbs = $request->input('tepvanbankhac');

            TepVanBanKhac::where('vanbankhac_id',$vbid)->delete();

            if ($tvbs) {


                foreach ($tvbs as $tvb) {

                    $path = Media::find($tvb);

                    $tvbn = new TepVanBanKhac;

                    $tvbn->vanbankhac_id = $vbid;

                    $tvbn->media_id = $tvb;

                    $tvbn->path = $path->directory . '/' . $path->filename . '.' . $path->extension;

                    $tvbn->save();
                }
            }


            flash('Sửa văn bản thành công!');

            return redirect()->route('index-van-ban-khac');
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\LichCongTac  $lichCongTac
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {

        // this is only done to get the role name
        $vbk = LichCongTac::find($request->input('id'));

        $vbk->delete();

//        event(new TinTucDeleted($tintuc));

        return response(['data' => 'Văn bản đã bị xoá'], 200);
    }

    public function postDuyetVanBan(Request $request)
    {



        $vbk = LichCongTac::find($request->input('id'));

        $vbk->daduyet = '1';

        $vbk->save();

        return response(['data' => 'Văn bản đã được duyệt đăng'], 200);
    }

    public function updateSlug(){
        $vanban = LichCongTac::all();

        foreach ($vanban as $vb){
            $vb->slug = str_slug($vb->name);
            $vb->save();
        }

        return response(['data' => 'Văn bản đã được cập nhật slug'], 200);
    }
}
