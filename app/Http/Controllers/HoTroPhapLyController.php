<?php

namespace App\Http\Controllers;

use App\HoTroPhapLy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\CoQuan;
use App\LinhVuc;
use Carbon\Carbon;

class HoTroPhapLyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hotropl = HoTroPhapLy::orderBy('id','decs')->paginate(12);
        $coquan = CoQuan::all();
        $linhvuc = LinhVuc::all();



        return view('admin.pages.ho-tro-phap-ly',compact('hotropl','coquan','linhvuc'));
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

        $dnh = new HoTroPhapLy();

        $dnh->linhvuc_id = $request->linhvuc_id;
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
     * @param  \App\HoTroPhapLy  $hoTroPhapLy
     * @return \Illuminate\Http\Response
     */
    public function show(HoTroPhapLy $hoTroPhapLy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\HoTroPhapLy  $hoTroPhapLy
     * @return \Illuminate\Http\Response
     */
    public function edit(HoTroPhapLy $hoTroPhapLy)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\HoTroPhapLy  $hoTroPhapLy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $htpl = HoTroPhapLy::find($request->input('id'));

        $htpl->coquan_id = $request->coquan_id;
        $htpl->cautraloi = $request->cautraloi;
        $htpl->ngaytraloi = Carbon::now();
        $htpl->save();

        flash('Cập nhật thành công!');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\HoTroPhapLy  $hoTroPhapLy
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        HoTroPhapLy::destroy($request->input('id'));

        return response(['data' => 'Done'], 200);
    }

    public function postDuyet(Request $request)
    {
        $id = $request->input('id');


        $htpl = HoTroPhapLy::find($id);

        $htpl->daduyet = $request->input('duyetdang');

        $htpl->save();

        return response(['data' => 'Done'], 200);
    }
}
