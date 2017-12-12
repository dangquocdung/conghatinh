<?php

namespace App\Http\Controllers;

use App\HoiDapTrucTuyen;
use Illuminate\Http\Request;

class HoiDapTrucTuyenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hoidaptructuyen = HoiDapTrucTuyen::orderBy('id','decs')->paginate(12);



        return view('admin.pages.hoi-dap-truc-tuyen',compact('hoidaptructuyen'));
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
     * @param  \App\HoiDapTrucTuyen  $hoiDapTrucTuyen
     * @return \Illuminate\Http\Response
     */
    public function show(HoiDapTrucTuyen $hoiDapTrucTuyen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\HoiDapTrucTuyen  $hoiDapTrucTuyen
     * @return \Illuminate\Http\Response
     */
    public function edit(HoiDapTrucTuyen $hoiDapTrucTuyen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\HoiDapTrucTuyen  $hoiDapTrucTuyen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HoiDapTrucTuyen $hoiDapTrucTuyen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\HoiDapTrucTuyen  $hoiDapTrucTuyen
     * @return \Illuminate\Http\Response
     */
    public function destroy(HoiDapTrucTuyen $hoiDapTrucTuyen)
    {
        //
    }
}
