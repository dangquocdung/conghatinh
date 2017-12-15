<?php

namespace App\Http\Controllers;

use App\TopPic;
use Illuminate\Http\Request;
use Auth;


class TopPicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $toppic = TopPic::orderBy('id', 'desc')->paginate(20);
        return view('admin.pages.tbt.toppic',compact('toppic'));
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
        $tp = TopPic::create([

            'user_id' => Auth::user()->id,

            'hinhanh'=> substr($request->input('hinhanh'), strpos($request->input('hinhanh'),'u')),
            
            'thutu' => $request->input('thutu')

        ]);

        flash('Thêm hình ảnh thành công');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TopPic  $topPic
     * @return \Illuminate\Http\Response
     */
    public function show(TopPic $topPic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TopPic  $topPic
     * @return \Illuminate\Http\Response
     */
    public function edit(TopPic $topPic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TopPic  $topPic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TopPic $topPic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TopPic  $topPic
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}
