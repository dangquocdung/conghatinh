<?php

namespace App\Http\Controllers;

use App\Events\User\VanBanCreated;

use App\TepTinTuc;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;
use Plank\Mediable\Media;
use Plank\Mediable\MediaUploader;
use Auth;

use App\VanBan;
use App\TepVanBan;
use App\LinhVuc;
use App\ChuyenMuc;
class VanBanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct() {

        $this->middleware('auth');

        $linhvuc = LinhVuc::all();
        view()->share('linhvuc',$linhvuc);

        $chuyenmuc = ChuyenMuc::orderby('thutu','asc')->get();
        view()->share('chuyenmuc',$chuyenmuc);
    }


    public function index()
    {
        $tepvanban = TepVanBan::all();
        return view('admin.pages.van-ban',compact('tepvanban'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//        $linhvuc = LinhVuc::all();
        return view('admin.pages.van-ban-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vb = new VanBan;

        $vb->user_id = Auth::user()->id;

        $vb->loaitin_id = $request->loaitin_id;
        $vb->kihieuvb = $request->kihieuvb;
        $vb->ngaybanhanh = Carbon::parse($request->ngaybanhanh);
        $vb->nguoiki_id = $request->nguoiki_id;
        $vb->trichyeu = $request->trichyeu;
        $vb->slug = str_slug($request->kihieuvb."-".$request->ngaybanhanh);

        $vb->save();

        $vbid = $vb->id;


        $tvbs = $request->input('tepvanban');

        foreach ($tvbs as $tvb){

            $path = Media::find($tvb);

            $tvbn= new TepVanBan;

            $tvbn->vanban_id = $vbid;

            $tvbn->media_id = $tvb;

            $tvbn->path = $path->directory.'/'.$path->filename.'.'.$path->extension;

            $tvbn->save();
        }


//        event(new VanBanCreated($vb));

        flash('Thêm văn bản thành công!');

        return redirect()->route('index-van-ban');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vbedit = VanBan::find($id);

        $tepvanban = TepVanBan::where('vanban_id',$vbedit->id)->get();

        return view('admin.pages.van-ban-edit',compact('vbedit','tepvanban'));

//        return response()->json($tepvanban);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $vb = VanBan::find($request->vbedit);

        $vb->user_id = Auth::user()->id;

        $vb->loaitin_id = $request->loaitin_id;
        $vb->loaivb_id = $request->loaivb_id;
        $vb->kihieuvb = $request->kihieuvb;
        $vb->ngaybanhanh = Carbon::parse($request->ngaybanhanh);
        $vb->nguoiki_id = $request->nguoiki_id;
        $vb->trichyeu = $request->trichyeu;
        $vb->slug = str_slug($request->kihieuvb);
        $vb->ngaydang = Carbon::parse($request->ngaydang);

        $vb->save();

        $vbid = $vb->id;


        $tvbs = $request->input('tepvanban');


        TepVanBan::where('vanban_id',$vbid)->delete();


        foreach ($tvbs as $tvb){

            $path = Media::find($tvb);

            $tvbn= new TepVanBan;

            $tvbn->vanban_id = $vbid;

            $tvbn->media_id = $tvb;

            $tvbn->path = $path->directory.'/'.$path->filename.'.'.$path->extension;

            $tvbn->save();
        }


//        event(new VanBanCreated($vb));

        flash('Cập nhật văn bản thành công!');

        return redirect()->route('index-van-ban');




    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {

        // this is only done to get the role name
        $vb = VanBan::find($request->input('id'));

        $vb->delete();

//        event(new TinTucDeleted($tintuc));

        return response(['data' => 'Văn bản đã bị xoá'], 200);
    }

    public function postDuyetVanBan(Request $request)
    {



        $vb = VanBan::find($request->input('id'));

        $vb->daduyet = '1';

        $vb->save();

        return response(['data' => 'Văn bản đã được duyệt đăng'], 200);
    }
}
