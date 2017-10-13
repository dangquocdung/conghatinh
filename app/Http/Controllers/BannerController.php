<?php

namespace App\Http\Controllers;

use App\Banner;
use Illuminate\Http\Request;
use Auth;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $banner = Banner::orderBy('id', 'desc')->paginate(20);

        return view('admin.pages.tbt.banner-trang-chu', compact('banner'));
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
        $bn = Banner::create([

            'user_id' => Auth::user()->id,

            'name' => $request->input('name'),

            'slug'=>str_slug($request->input('name')),

            // 'avatar' => $folder . $thumbFileName,

            'banner'=> substr($request->input('banner'), strpos($request->input('banner'),'u')),

            'lienket' => $request->input('lienket'),

            'thutu' => $request->input('thutu')

        ]);

        flash('Thêm Banner thành công');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function show(Banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function edit(Banner $banner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Banner $banner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Banner $banner)
    {
        //
    }
}
