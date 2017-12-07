<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;
use Validator;
use App\Album;

class AlbumController extends Controller
{

    public function index()
    {
        $albums = Album::with('Photos')->orderby('id','desc')->paginate(12);
        return view('admin.pages.album',compact('albums'));
    }

    public function show($id)
    {
        $ab = Album::find($id)->first();
        return view('admin.pages.album-chi-tiet',compact('ab'));
    }




    public function store(Request $request)
    {
        $v = Validator::make($request->all(),
            [
                'name' => 'required|min:10|max:191',
            ]
        );

        if ($v->fails())
        {
            return redirect()->back()->withErrors($v->errors());
        }

        $ab = new Album();

        $ab->name = $request->input('name');

        $ab->slug = str_slug($request->input('name'));

        $ab->cover_image = substr($request->input('cover_image'), strpos($request->input('cover_image'),'u'));

        $ab->save();

        flash('Thêm album thành công');

        return redirect()->back();
    }

    public function update(Request $request)
    {
        $v = Validator::make($request->all(),
            [
                'album-name' => 'required|min:10|max:191',
                'album-id' => 'required'
            ]
        );

        if ($v->fails())
        {
            return redirect()->back()->withErrors($v->errors());
        }

        $ab = Album::find($request->input('album-id'));

        $ab->name = $request->input('album-name');

        $ab->slug = str_slug($request->input('album-name'));

        $ab->save();

        flash('Cập nhật album thành công');

        return redirect()->back();

    }

    public function updateCover(Request $request)
    {

        $ab = Album::find($request->input('album_id'));

        $ab->cover_image = substr($request->input('cover_image'), strpos($request->input('cover_image'),'u'));

        $ab->save();

        flash('Cập nhật bìa album thành công');

        return redirect()->back();

    }

    public function destroy(Request $request)
    {
        $ab = Album::find($request->input('id'));
        $ab->delete();
        flash('Xóa Album thành công');
        return redirect( )->back();

    }

}
