<?php

namespace App\Http\Controllers;

use App\NguoiPhatNgon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class NguoiPhatNgonController extends Controller
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
                'name' => 'required|min:10|max:191',
                'chucdanh' => 'required|min:5|max:50',
                'email'=> 'required|email|max:191'
            ]
        );

        if ($v->fails())
        {
            return redirect()->back()->withErrors($v->errors());
        }

        $npn = new NguoiPhatNgon();

        $npn->coquan_id = $request->coquan_id;
        $npn->name = $request->name;
        $npn->chucdanh = $request->chucdanh;
        $npn->codinh = $request->codinh;
        $npn->didong = $request->didong;
        $npn->email = $request->email;
        $npn->save();

        flash('Đã thêm thành công!');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\NguoiPhatNgon  $nguoiPhatNgon
     * @return \Illuminate\Http\Response
     */
    public function show(NguoiPhatNgon $nguoiPhatNgon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\NguoiPhatNgon  $nguoiPhatNgon
     * @return \Illuminate\Http\Response
     */
    public function edit(NguoiPhatNgon $nguoiPhatNgon)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\NguoiPhatNgon  $nguoiPhatNgon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NguoiPhatNgon $nguoiPhatNgon)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\NguoiPhatNgon  $nguoiPhatNgon
     * @return \Illuminate\Http\Response
     */
    public function destroy(NguoiPhatNgon $nguoiPhatNgon)
    {
        //
    }
}
