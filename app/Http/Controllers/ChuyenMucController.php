<?php

namespace App\Http\Controllers;

use App\Events\User\ChuyenMucCreated;
use Illuminate\Http\Request;
use App\ChuyenMuc;

class ChuyenMucController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chuyenmucs = ChuyenMuc::orderBy('id', 'asc')->paginate(10);
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
        $chuyenmuc = ChuyenMuc::create([
            'name' => $request->input('name'),
            'slug' => str_slug($request->input('name')),
            'path' => $request->input('path'),
            'vitri' => $request->input('vitri'),
            'thutu'=>($request->input('thutu'))]);

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
        $chuyenmuc = ChuyenMuc::find($id);

        return view('admin.pages.tbt.chuyen-muc-edit', compact('chuyenmuc'));
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
        $cm->path = $request->input('path');
        $cm->vitri = $request->input('vitri');
        $cm->thutu = $request->input('thutu');
        $cm->save();

        flash('Chuyên mục đã được cập nhật');
        return redirect( route('chuyen-muc'));
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
