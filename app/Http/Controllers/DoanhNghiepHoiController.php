<?php

namespace App\Http\Controllers;

use App\DoanhNghiepHoi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DoanhNghiepHoiController extends Controller
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
        $v = Validator::make($request->all(),
            [
                'doanhnghiep' => 'required|min:10|max:191',
                'daidien' => 'required|min:10|max:50',
                'dienthoai' => 'required|numeric|min:9',
                'email'=> 'required|email|max:191',
                'diachi' => 'required|min:10|max:191',
                'cauhoi' => 'required|min:20'

            ]
        );

        if ($v->fails())
        {
            return redirect()->back()->withErrors($v->errors());
        }

        $dnh = new DoanhNghiepHoi;

        $dnh->coquan_id = $request->coquan_id;
        $dnh->doanhnghiep = $request->doanhnghiep;
        $dnh->daidien = $request->daidien;
        $dnh->sodt = $request->dienthoai;
        $dnh->email = $request->email;
        $dnh->diachi = $request->diachi;
        $dnh->cauhoi = $request->cauhoi;

        $dnh->save();

        flash('Câu hỏi của bạn đã được gởi đến BBT, xin cảm ơn!');

        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DoanhNghiepHoi  $doanhNghiepHoi
     * @return \Illuminate\Http\Response
     */
    public function show(DoanhNghiepHoi $doanhNghiepHoi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DoanhNghiepHoi  $doanhNghiepHoi
     * @return \Illuminate\Http\Response
     */
    public function edit(DoanhNghiepHoi $doanhNghiepHoi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DoanhNghiepHoi  $doanhNghiepHoi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DoanhNghiepHoi $doanhNghiepHoi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DoanhNghiepHoi  $doanhNghiepHoi
     * @return \Illuminate\Http\Response
     */
    public function destroy(DoanhNghiepHoi $doanhNghiepHoi)
    {
        //
    }
}
