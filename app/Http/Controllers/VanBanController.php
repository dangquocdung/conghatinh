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
        $linhvuc = LinhVuc::all();
        return view('admin.pages.van-ban-create',compact('linhvuc'));
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
        $vb = VanBan::create([

            'user_id' => Auth::user()->id,

            'loaitin_id'=> $request->input('loaitin_id'),


            'loaivb_id'=> $request->input('loaivb_id'),

            'linhvuc_id'=> $request->input('linhvuc_id'),


            'sovb' => $request->input('sovb'),

            'kihieuvb' => $request->input('kihieuvb'),

            'ngaybanhanh' => $request->input('ngaybanhanh'),

            'nguoiki_id' => $request->input('nguoiki_id'),

            'trichyeu' => $request->input('trichyeu'),

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

        return view('admin.pages.van-ban-edit',compact('vb'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
