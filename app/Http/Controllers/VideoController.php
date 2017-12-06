<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVideoRequest;
use App\Jobs\ConvertVideoForDownloading;
use App\Jobs\ConvertVideoForStreaming;
use App\Video;
use App\LoaiVideo;
use Carbon\Carbon;

class VideoController extends Controller
{
    public function __construct() {

        $this->middleware('auth');

        $loaivideo = LoaiVideo::all();
        view()->share('loaivideo',$loaivideo);
    }
    public function index()
    {
        $video =Video::orderby('id','desc')->paginate(12);
        return view('admin.pages.video',compact('video'));
    }

    public function store(StoreVideoRequest $request)
    {
        $folder = 'uploads/video/' . Carbon::now()->year . '/' . Carbon::now()->month . '/';

        if (!file_exists(public_path($folder))) {
            mkdir(public_path($folder), 0755, true);
        }

        $video = Video::create([
            'disk'          => 'videos_disk',
            'original_name' => $request->video->getClientOriginalName(),
            'path'          => $request->video->store($folder,'videos_disk'),
            'title'         => $request->title,
            'loaivideo_id'  => $request->loaivideo_id,
        ]);

        $this->dispatch(new ConvertVideoForDownloading($video));
        $this->dispatch(new ConvertVideoForStreaming($video));

//        return response()->json([
//            'id' => $video->id,
//        ], 201);

        return redirect()->back();
    }
}
