<?php

namespace App\Http\Controllers;

use App\GopY;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GopYController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gopy = GopY::orderBy('id','decs')->paginate(12);

        return view('admin.pages.gop-y',compact('gopy'));
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
                'hoten' => 'required|min:10|max:50',
                'dienthoai' => 'required|numeric|min:9',
                'email'=> 'required|email|max:191',
                'diachi' => 'required|min:10|max:191',
                'noidung' => 'required|min:20'

            ]
        );

        if ($v->fails())
        {
            return redirect()->back()->withErrors($v->errors());
        }

        $lh = new GopY;


        $lh->hoten = $request->hoten;
        $lh->sodt = $request->dienthoai;
        $lh->email = $request->email;
        $lh->diachi = $request->diachi;
        $lh->noidung = $request->noidung;

        $lh->save();

        flash('Góp ý của bạn đã được gởi đến BBT, xin cảm ơn!');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\GopY  $gopY
     * @return \Illuminate\Http\Response
     */
    public function show(GopY $gopY)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\GopY  $gopY
     * @return \Illuminate\Http\Response
     */
    public function edit(GopY $gopY)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\GopY  $gopY
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GopY $gopY)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\GopY  $gopY
     * @return \Illuminate\Http\Response
     */
    public function destroy(GopY $gopY)
    {
        //
    }
}
