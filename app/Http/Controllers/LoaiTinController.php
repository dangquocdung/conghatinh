<?php

namespace App\Http\Controllers;

use App\Events\User\LoaiTinCreated;
use Illuminate\Http\Request;
use App\LoaiTin;


class LoaiTinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $loaitin = LoaiTin::orderBy('id', 'asc')->paginate(10);
        return view('admin.pages.tbt.loai-tin', compact('loaitin'));
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
        $loaitin = LoaiTin::create([
            'chuyenmuc_id'=>$request->input('chuyenmuc_id'),
            'name' => $request->input('name'),
            'slug'=>str_slug($request->input('name')),
            'thutu'=>($request->input('thutu'))
        ]);

        event(new LoaiTinCreated($loaitin));

        flash('Thêm loại tin thành công');

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
        $loaitin = LoaiTin::find($id);

        return view('admin.pages.tbt.loai-tin-edit', compact('loaitin'));
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
        $lt = LoaiTin::find($request->input('id'));
        $lt->chuyenmuc_id = $request->input('chuyenmuc_id');
        $lt->name = $request->input('name');
        $lt->slug = str_slug($request->input('name'));
        $lt->thutu = $request->input('thutu');
        $lt->save();

        flash('Loại tin đã được cập nhật');
        return redirect()->back();
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
