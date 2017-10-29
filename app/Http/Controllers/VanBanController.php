<?php

namespace App\Http\Controllers;

use App\Events\User\VanBanCreated;

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

//        $banner = Banner::where('vitri','1')->orderby('thutu','asc')->get();

        view()->share('linhvuc',$linhvuc);
    }


    public function index()
    {
        $vanban = VanBan::orderby('id','desc')->paginate(10);
        return view('admin.pages.van-ban',compact('vanban'));
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
        //


        $ngaybanhanh = Carbon::parse($request->input('ngaybanhanh'));





        $vb = VanBan::create([

            'user_id' => Auth::user()->id,

            'loaitin_id'=> $request->input('loaitin_id'),


            'loaivb_id'=> $request->input('loaivb_id'),

            'linhvuc_id'=> $request->input('linhvuc_id'),

            'kihieuvb' => $request->input('kihieuvb'),

            'ngaybanhanh' => $ngaybanhanh,

            'nguoiki_id' => $request->input('nguoiki_id'),

            'trichyeu' => $request->input('trichyeu'),

            'ngaydang' => $request->input('ngaydang'),

            'noibat' => '0',

            'daduyet' => '0'

        ]);




        $tvbs = $request->input('tepvanban');

        foreach ($tvbs as $tvb){

            $path = Media::find($tvb);


            TepVanBan::create([
                'vanban_id' => (int)$vb->id,
                'media_id' => (int)$tvb,
                'path' => $path->directory.'/'.$path->filename.'.'.$path->extension
            ]);
        }





//        event(new VanBanCreated($vb));

        flash('Thêm văn bản thành công!');

        return redirect()->back();
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
        $vb = VanBan::find($id);
        $tepvanban = TepVanBan::all();

        return view('admin.pages.van-ban-edit',compact('vb','tepvanban'));

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
        $vb = VanBan::where('id', $request->input('id'))->update([

            'user_id' => Auth::user()->id,

            'loaitin_id'=> $request->input('loaitin_id'),

            'loaivb_id'=> $request->input('loaivb_id'),

            'linhvuc_id'=> $request->input('linhvuc_id'),

            'kihieuvb' => $request->input('kihieuvb'),

            'ngaybanhanh' => $request->input('ngaybanhanh'),

            'nguoiki_id' => $request->input('nguoiki_id'),

            'trichyeu' => $request->input('trichyeu'),

            'ngaydang' => $request->input('ngaydang')


        ]);

        TepVanBan::where('vanban_id',$request->input('id'))->delete();

        $tvbs = $request->input('tepvanban');

        foreach ($tvbs as $tvb){

            $path = Media::find($tvb);


            TepVanBan::create([
                'vanban_id' => $request->input('id'),
                'media_id' => (int)$tvb,
                'path' => $path->directory.'/'.$path->filename.'.'.$path->extension
            ]);
        }

        return redirect()->route('van-ban');



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
