<?php

namespace App\Http\Controllers;

use App\LoaiVideo;
use App\Video;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Validator;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $loaivideo = LoaiVideo::all();

        $video = Video::orderby('id','desc ')->paginate(10);

        if (Session::has('loaivideo_id')){
            $loaivideo_id = Session::get('chuyenmuc_id');
        }else{
            $loaivideo_id = 1;
        }

        return view('admin.pages.video',compact('video','loaivideo','loaivideo_id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $v = Validator::make($request->all(),
            [
                'name' => 'required|min:10|max:191',
                'gioithieu' => 'required|min:10'
            ]
        );

        if ($v->fails())
        {
            return redirect()->back()->withErrors($v->errors());
        }

        $vd = new Video();
        $vd->loaivideo_id = $request->input('loaivideo_id');
        $vd->name = $request->input('name');
        $vd->slug = str_slug($request->input('name'));
        $vd->gioithieu = $request->input('gioithieu');
        $vd->src = $request->input('src');
        $vd->save();

        flash('Thêm video thành công');

        return redirect()->back();


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function show(Video $video)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function edit(Video $video)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Video $video)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function destroy(Video $video)
    {
        //
    }
}
