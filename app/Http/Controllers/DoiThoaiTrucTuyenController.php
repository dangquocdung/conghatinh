<?php

namespace App\Http\Controllers;

use App\DoiThoaiTrucTuyen;
use Illuminate\Http\Request;

class DoiThoaiTrucTuyenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doithoaitructuyen = DoiThoaiTrucTuyen::orderBy('id','decs')->paginate(12);



        return view('admin.pages.doi-thoai-truc-tuyen',compact('doithoaitructuyen'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.doi-thoai-truc-tuyen-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DoiThoaiTrucTuyen::create($request->all());

        flash('Đăng thành công!');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DoiThoaiTrucTuyen  $doiThoaiTrucTuyen
     * @return \Illuminate\Http\Response
     */
    public function show(DoiThoaiTrucTuyen $doiThoaiTrucTuyen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DoiThoaiTrucTuyen  $doiThoaiTrucTuyen
     * @return \Illuminate\Http\Response
     */
    public function edit(DoiThoaiTrucTuyen $doiThoaiTrucTuyen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DoiThoaiTrucTuyen  $doiThoaiTrucTuyen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DoiThoaiTrucTuyen $doiThoaiTrucTuyen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DoiThoaiTrucTuyen  $doiThoaiTrucTuyen
     * @return \Illuminate\Http\Response
     */
    public function destroy(DoiThoaiTrucTuyen $doiThoaiTrucTuyen)
    {
        //
    }
}
