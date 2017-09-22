<?php

namespace App\Http\Controllers;

use App\Events\User\TinTucCreated;

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

        $tintuc = TinTuc::create([

            'user_id' => Auth::user()->id,

            'loaitin_id'=> $request->input('loaitin_id'),

            'name' => $request->input('name'),

            'slug'=>str_slug($request->input('name')),

            // 'avatar' => $folder . $thumbFileName,

            'avatar'=> substr($request->input('avatar'), strpos($request->input('avatar'),'u')),

            'gioithieu' => $request->input('gioithieu'),

            'noidung' => $request->input('noidung')

        ]);

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

        return view('admin.pages.tin-tuc-su-kien-edit',compact('tintuc'));
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
    public function destroy($id)
    {
        //
    }
}
