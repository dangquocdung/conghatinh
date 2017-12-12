<?php

namespace App\Http\Controllers;

use App\HoiDapTrucTuyen;
use Illuminate\Http\Request;

class HoiDapTrucTuyenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hoidaptructuyen = HoiDapTrucTuyen::orderBy('id','decs')->paginate(12);



        return view('admin.pages.hoi-dap-truc-tuyen',compact('hoidaptructuyen'));
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
        HoiDapTrucTuyen::create($request->all());

        flash('Cảm ơn bạn đã đặt câu hỏi');

        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\HoiDapTrucTuyen  $hoiDapTrucTuyen
     * @return \Illuminate\Http\Response
     */
    public function show(HoiDapTrucTuyen $hoiDapTrucTuyen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\HoiDapTrucTuyen  $hoiDapTrucTuyen
     * @return \Illuminate\Http\Response
     */
    public function edit(HoiDapTrucTuyen $hoiDapTrucTuyen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\HoiDapTrucTuyen  $hoiDapTrucTuyen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HoiDapTrucTuyen $hoiDapTrucTuyen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\HoiDapTrucTuyen  $hoiDapTrucTuyen
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->input('id');


        HoiDapTrucTuyen::find($id)->delete();


        return response(['data' => 'Câu hỏi đã bị xoá'], 200);
    }

    public function postDuyet(Request $request)
    {
        $id = $request->input('id');


        $htpl = HoiDapTrucTuyen::find($id);

        $htpl->daduyet = $request->input('duyetdang');

        $htpl->save();

        return response(['data' => 'Done'], 200);
    }

    public function postTraLoi(Request $request)
    {
        $id = $request->id;


        $htpl = HoiDapTrucTuyen::find($id);

        $htpl->nguoitraloi = $request->nguoitraloi;
        $htpl->chucvu = $request->chucvu;
        $htpl->cautraloi = $request->cautraloi;

        $htpl->save();

//        return response(['data' => 'Done'], 200);
        flash('Cảm ơn bạn đã trả lời câu hỏi');
        return redirect()->back();
    }
}
