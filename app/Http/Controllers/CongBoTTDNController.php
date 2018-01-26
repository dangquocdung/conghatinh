<?php

namespace App\Http\Controllers;

use App\CongBoTTDN;
use Illuminate\Http\Request;

class CongBoTTDNController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $cbtt =CongBoTTDN::all();

        return  view('admin.pages.cong-bo-tt-dn',compact('cbtt'));
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
     * @param  \App\CongBoTTDN  $congBoTTDN
     * @return \Illuminate\Http\Response
     */
    public function show(CongBoTTDN $congBoTTDN)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CongBoTTDN  $congBoTTDN
     * @return \Illuminate\Http\Response
     */
    public function edit(CongBoTTDN $congBoTTDN)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CongBoTTDN  $congBoTTDN
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CongBoTTDN $congBoTTDN)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CongBoTTDN  $congBoTTDN
     * @return \Illuminate\Http\Response
     */
    public function destroy(CongBoTTDN $congBoTTDN)
    {
        //
    }
}
