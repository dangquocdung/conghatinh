<?php

namespace App\Http\Controllers;

use App\Events\User\TinTucCreated;

use App\TepTinTuc;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;
use Plank\Mediable\Media;
use Plank\Mediable\MediaUploader;
use Auth;

use App\TinTuc;

class TinTucController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tintuc = TinTuc::orderby('id','desc')->paginate(10);

        return view('admin.pages.tin-tuc-su-kien',compact('tintuc'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.tin-tuc-su-kien-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, MediaUploader $mediaUploader)
    {

        $validator = Validator::make($request->all(), [
            'file' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator);
        }

        // $validator = Validator::make($request->all(), [
        //     'avatar' => 'file|image'
        // ]);

        // // if there are validation errors, show that
        // if ($validator->fails()) {
        //     return response(['message' => $validator->errors()], 433);
        // }

        // $file = $request->file('avatar');
        // $folder = 'uploads/avatar/' . Carbon::now()->year . '/' . Carbon::now()->month . '/';
        // $uniqid = uniqid();
        // $mainFileName = $uniqid . '.' . $file->getClientOriginalExtension();
        // $thumbFileName = $uniqid . '_thumb.' . $file->getClientOriginalExtension();

        // // checking if the folder exist
        // // if not, create the folder
        // if (!file_exists(public_path($folder))) {
        //     mkdir(public_path($folder), 0755, true);
        // }

        // $mainImage = Image::make($request->file('avatar'))
        //     ->resize(1080, null, function ($constraint) {
        //         $constraint->aspectRatio();
        //         $constraint->upsize();
        //     })
        //     ->save(public_path($folder) . $mainFileName);

        // // making the media entry
        // $media = $mediaUploader->fromSource(public_path($folder) . $mainFileName)
        //     ->toDirectory($folder)
        //     ->upload();

        // $thumbImage = Image::make($request->file('avatar'))
        //     ->resize(400, null, function ($constraint) {
        //         $constraint->aspectRatio();
        //         $constraint->upsize();
        //     })
        //     ->save(public_path($folder) . $thumbFileName);

        //

        $tintuc = new TinTuc;

        $tintuc->user_id = Auth::user()->id;

        $tintuc->loaitin_id = $request->input('loaitin_id');

        $tintuc->name = $request->input('name');

        $tintuc->slug = str_slug($request->input('name'));

        if ($request->input('avatar')){
            $tintuc->avatar = substr($request->input('avatar'), strpos($request->input('avatar'),'u'));

        }else{
            $tintuc->avatar = "images/no-image-found.gif";

        }

        $tintuc->gioithieu = $request->input('gioithieu');

        $tintuc->noidung = $request->input('noidung');

        $tintuc->tacgia = $request->input('tacgia');

        $tintuc->nguon = $request->input('nguon');

        $tintuc->ngaydang = $request->input('ngaydang');

        $tintuc->save();

        $ttts = $request->input('teptintuc');

        if ($ttts){

            foreach ($ttts as $ttt){

                $path = Media::find($ttt);


                TepTinTuc::create([
                    'tintuc_id' => (int)$tintuc->id,
                    'media_id' => (int)$ttt,
                    'path' => $path->directory.'/'.$path->filename.'.'.$path->extension
                ]);
            }


        }


        event(new TinTucCreated($tintuc));

        flash('Thêm bản tin thành công');

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
    public function edit($slug)
    {
        $tintuc = TinTuc::where('slug',$slug)->first();
        $teptintuc = TepTinTuc::all();


        return view('admin.pages.tin-tuc-su-kien-edit',compact('tintuc','teptintuc'));
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
        $tintuc = TinTuc::find($request->input('id'));

        $tintuc->loaitin_id = $request->input('loaitin_id');

        $tintuc->name = $request->input('name');

        $tintuc->slug = str_slug($request->input('name'));

        $tintuc->avatar = substr($request->input('avatar'), strpos($request->input('avatar'),'u'));

        $tintuc->gioithieu = $request->input('gioithieu');

        $tintuc->noidung = $request->input('noidung');

        $tintuc->tacgia = $request->input('tacgia');

        $tintuc->nguon = $request->input('nguon');

        $tintuc->ngaydang = Carbon::parse($request->input('ngaydang'));

        $tintuc->save();
        // event(new TinTucCreated($tintuc));

        flash('Cập nhật bản tin thành công');

        return redirect()->route('tin-tuc-su-kien');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $tinTucId = $request->input('id');

        // this is only done to get the role name
        $tintuc = TinTuc::find($tinTucId);

        $tintuc->delete();

//        DB::table('tintuc')->where('id', $tinTucId)->delete();
//
//        event(new TinTucDeleted($tintuc));

        return response(['data' => 'Tin bài đã bị xoá'], 200);
    }

    public function postDuyetTinTuc(Request $request)
    {
        $tinTucId = $request->input('id');


        $tintuc = TinTuc::find($tinTucId);

        $tintuc->daduyet = '1';

        $tintuc->save();

        return response(['data' => 'Tin bài đã được duyệt đăng'], 200);
    }

    public function postNoiBatTinTuc(Request $request)
    {
        $tinTucId = $request->input('id');


        $tintuc = TinTuc::find($tinTucId);

        $tintuc->noibat = $request->input('noibat');

        $tintuc->save();

        return response(['data' => 'Bản tin đã nổi bật'], 200);
    }
}
