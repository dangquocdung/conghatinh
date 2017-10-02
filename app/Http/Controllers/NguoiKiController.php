<?php

namespace App\Http\Controllers;

use App\NguoiKi;
use Illuminate\Http\Request;

class NguoiKiController extends Controller
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
        $nguoiki = NguoiKi::create([
            'name' => $request->input('name'),
            'slug'=>str_slug($request->input('name')),
            'cqbh_id' => $request->input('cqbh_id'),
            'hoatdong' => true
        ]);

//        event(new ChuyenMucCreated($chuyenmuc));

        flash('Thêm người kí thành công');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\NguoiKi  $nguoiKi
     * @return \Illuminate\Http\Response
     */
    public function show(NguoiKi $nguoiKi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\NguoiKi  $nguoiKi
     * @return \Illuminate\Http\Response
     */
    public function edit(NguoiKi $nguoiKi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\NguoiKi  $nguoiKi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NguoiKi $nguoiKi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\NguoiKi  $nguoiKi
     * @return \Illuminate\Http\Response
     */
    public function destroy(NguoiKi $nguoiKi)
    {
        //
    }
}
