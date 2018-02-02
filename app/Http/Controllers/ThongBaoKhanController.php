<?php

namespace App\Http\Controllers;

use App\ThongBaoKhan;
use Illuminate\Http\Request;

class ThongBaoKhanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($slug=null)
    {
        $thongbaokhan = ThongBaoKhan::orderby('id','asc')->get();
        return view('admin.pages.thong-bao-khan',compact('slug','thongbaokhan'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ThongBaoKhan  $thongBaoKhan
     * @return \Illuminate\Http\Response
     */
    public function show(ThongBaoKhan $thongBaoKhan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ThongBaoKhan  $thongBaoKhan
     * @return \Illuminate\Http\Response
     */
    public function edit(ThongBaoKhan $thongBaoKhan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ThongBaoKhan  $thongBaoKhan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ThongBaoKhan $thongBaoKhan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ThongBaoKhan  $thongBaoKhan
     * @return \Illuminate\Http\Response
     */
    public function destroy(ThongBaoKhan $thongBaoKhan)
    {
        //
    }
}
