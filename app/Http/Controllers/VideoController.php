<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Video;
use App\LoaiVideo;
use Carbon\Carbon;
use File;
use Session;

class VideoController extends Controller
{
    public function __construct() {

        $this->middleware('auth');

        $loaivideo = LoaiVideo::all();
        view()->share('loaivideo',$loaivideo);
    }


    public function index()
    {
        $dir = 'sftp';

        if (!file_exists(public_path($dir))) {
            mkdir(public_path($dir), 0755, true);
        }

        $files = File::allFiles($dir);

        $video =Video::orderby('id','desc')->paginate(12);
        return view('admin.pages.video',compact('video','files'));
    }

    public function store(Request $request)
    {
        $vd = new Video();

        $vd->loaivideo_id = $request->input('loaivideo_id');
        $vd->ngayphat = Carbon::parse($request->input('ngayphat'));
        $vd->src = $request->input('src');

        $vd->save();

        flash('Thêm video thành công');

        Session::put('loaivideo_id', $request->input('loaivideo_id'));

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->input('id');


        $vd = Video::find($id);

        $vd->delete();

        return response(['data' => 'Video đã bị xoá'], 200);
    }

    public function postDuyet(Request $request)
    {
        $id = $request->input('id');


        $vd = Video::find($id);

//        $tintuc->daduyet = $request->input('daduyet');

        $vd->daduyet = $request->input('duyetdang');

        $vd->save();

        return response(['data' => 'Done!'], 200);
    }

    public function postNoiBat(Request $request)
    {
        $id = $request->input('id');


        $vd = Video::find($id);

//        $tintuc->daduyet = $request->input('daduyet');

        $vd->noibat = $request->input('noibat');

        $vd->save();

        return response(['data' => 'Done!'], 200);
    }
}
