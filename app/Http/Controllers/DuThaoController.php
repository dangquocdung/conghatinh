<?php

namespace App\Http\Controllers;

use App\DuThao;
use Illuminate\Http\Request;

class DuThaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $duthao = DuThao::orderBy('id','decs')->paginate(12);

        return view('admin.pages.gop-y-du-thao',compact('duthao'));
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
     * @param  \App\DuThao  $duThao
     * @return \Illuminate\Http\Response
     */
    public function show(DuThao $duThao)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DuThao  $duThao
     * @return \Illuminate\Http\Response
     */
    public function edit(DuThao $duThao)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DuThao  $duThao
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DuThao $duThao)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DuThao  $duThao
     * @return \Illuminate\Http\Response
     */
    public function destroy(DuThao $duThao)
    {
        //
    }
}
