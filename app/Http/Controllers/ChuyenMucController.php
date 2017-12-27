<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;

use App\Events\User\ChuyenMucCreated;
use Illuminate\Http\Request;
use App\ChuyenMuc;
use App\Banner;

class ChuyenMucController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct() {
        $this->middleware('auth');

        $banner = Banner::where('vitri','1')->orderby('thutu','asc')->get();

        view()->share('banner',$banner);
    }


    public function index()
    {
        $chuyenmucs = ChuyenMuc::orderBy('thutu', 'asc')->paginate(20);
        return view('admin.pages.tbt.chuyen-muc', compact('chuyenmucs'));
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
                'name' => 'required|min:10|max:191|unique:chuyenmuc',
            ]
        );

        if ($v->fails())
        {
            return redirect()->back()->withErrors($v->errors());
        }

        $chuyenmuc = ChuyenMuc::create([
            'name' => $request->input('name'),
            'slug' => str_slug($request->input('name')),
            'icon' => $request->icon,
            'path' => $request->input('path'),
            'thutu'=> $request->input('thutu'),
            'banner_id' => $request->input('banner')
            ]);

        event(new ChuyenMucCreated($chuyenmuc));

        flash('Thêm chuyên mục thành công');
        
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
        $chuyenmucs = ChuyenMuc::all();
        $chuyenmuc = ChuyenMuc::find($id);

        return view('admin.pages.tbt.chuyen-muc-edit', compact('chuyenmuc','chuyenmucs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $cm = ChuyenMuc::find($request->input('id'));
        $cm->name = $request->input('name');
        $cm->slug = str_slug($request->input('name'));
        $cm->icon = $request->icon;
        $cm->show = $request->show;
        $cm->path = $request->input('path');
        $cm->thutu = $request->input('thutu');
        $cm->banner_id = $request->input('banner');
        $cm->save();

        flash('Chuyên mục đã được cập nhật');
        return redirect( route('index-chuyen-muc'));
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
