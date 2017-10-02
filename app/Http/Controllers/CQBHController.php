<?php

namespace App\Http\Controllers;

use App\CQBH;
use Illuminate\Http\Request;

class CQBHController extends Controller
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
        $cqbh = CQBH::create([
            'name' => $request->input('name'),
            'slug'=>str_slug($request->input('name')),
            'hoatdong' => true
        ]);

//        event(new ChuyenMucCreated($chuyenmuc));

        flash('Thêm cơ quan ban hành thành công');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CQBH  $cQBH
     * @return \Illuminate\Http\Response
     */
    public function show(CQBH $cQBH)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CQBH  $cQBH
     * @return \Illuminate\Http\Response
     */
    public function edit(CQBH $cQBH)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CQBH  $cQBH
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CQBH $cQBH)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CQBH  $cQBH
     * @return \Illuminate\Http\Response
     */
    public function destroy(CQBH $cQBH)
    {
        //
    }
}
