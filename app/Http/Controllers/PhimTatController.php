<?php

namespace App\Http\Controllers;

use App\PhimTat;
use Illuminate\Http\Request;

class PhimTatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $phimtat = PhimTat::all();

        return view('admin.pages.tbt.phim-tat',compact('phimtat'));
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
            'name' => 'required',
            'icon' => 'required',
            'link' => 'required'
        ]);

        PhimTat::create($request->all());

        flash('Tạo liên kết thành công!');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PhimTat  $phimTat
     * @return \Illuminate\Http\Response
     */
    public function show(PhimTat $phimTat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PhimTat  $phimTat
     * @return \Illuminate\Http\Response
     */
    public function edit(PhimTat $phimTat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PhimTat  $phimTat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PhimTat $phimTat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PhimTat  $phimTat
     * @return \Illuminate\Http\Response
     */
    public function destroy(PhimTat $phimTat)
    {
        //
    }
}
