<?php

namespace App\Http\Controllers;

use App\GopYDuThao;
use Illuminate\Http\Request;

class GopYDuThaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $this->validate($request, [
            'hoten' => 'required',
            'noidung' => 'required',
        ]);

        $create = GopYDuThao::create($request->all());

        flash('Cảm ơn bạn đã đóng góp ý kiến');

        return redirect()->back();



//        return response()->json(['status'=>'success','msg'=>'Post created successfully']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\GopYDuThao  $gopYDuThao
     * @return \Illuminate\Http\Response
     */
    public function show(GopYDuThao $gopYDuThao)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\GopYDuThao  $gopYDuThao
     * @return \Illuminate\Http\Response
     */
    public function edit(GopYDuThao $gopYDuThao)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\GopYDuThao  $gopYDuThao
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\GopYDuThao  $gopYDuThao
     * @return \Illuminate\Http\Response
     */
    public function destroy(GopYDuThao $gopYDuThao)
    {
        //
    }
}
