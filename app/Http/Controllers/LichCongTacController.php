<?php

namespace App\Http\Controllers;

use App\LichCongTac;
use Illuminate\Http\Request;
use App\Media;

class LichCongTacController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $lichct = LichCongTac::orderby('id','desc')->get();

        return view('admin.pages.lich-cong-tac',compact('lichct'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pdfs = Media::whereIn('aggregate_type',['pdf','document','spreadsheet'])->orderby('id','desc')->get();
        return view('admin.pages.lich-cong-tac-create',compact('pdfs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $create = LichCongTac::create($request->all());

        flash('Cảm ơn bạn đã đóng góp ý kiến');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\LichCongTac  $lichCongTac
     * @return \Illuminate\Http\Response
     */
    public function show(LichCongTac $lichCongTac)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\LichCongTac  $lichCongTac
     * @return \Illuminate\Http\Response
     */
    public function edit(LichCongTac $lichCongTac)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\LichCongTac  $lichCongTac
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LichCongTac $lichCongTac)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\LichCongTac  $lichCongTac
     * @return \Illuminate\Http\Response
     */
    public function destroy(LichCongTac $lichCongTac)
    {
        //
    }
}
