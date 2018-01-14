<?php

namespace App\Http\Controllers;

use App\dnhcqnn;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;

class DnhcqnnController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dnhoi = dnhcqnn::orderBy('id','decs')->get();

        return view('admin.pages.doanh-nghiep-hoi',compact('dnhoi'));
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
                'diachi' => 'required|min:10|max:191',
                'cauhoi' => 'required|min:20'

            ]
        );

        if ($v->fails())
        {
            return redirect()->back()->withErrors($v->errors());
        }

        dnhcqnn::create($request->all());

        flash('Câu hỏi của bạn đã được gởi đến BBT, xin cảm ơn!');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\dnhcqnn  $dnhcqnn
     * @return \Illuminate\Http\Response
     */
    public function show(dnhcqnn $dnhcqnn)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\dnhcqnn  $dnhcqnn
     * @return \Illuminate\Http\Response
     */
    public function edit(dnhcqnn $dnhcqnn)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\dnhcqnn  $dnhcqnn
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        dnhcqnn::where('id',$id)->update($request->except(['_token','_wysihtml5_mode']));

//        flash('Câu hỏi của bạn đã được gởi đến BBT, xin cảm ơn!');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\dnhcqnn  $dnhcqnn
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        dnhcqnn::destroy($request->input('id'));

        return response(['data' => 'Done'], 200);
    }


    public function postDuyet(Request $request)
    {
        $id = $request->input('id');


        $dnh = dnhcqnn::findOrFail($id);

        $dnh->daduyet = $request->input('duyetdang');

        $dnh->save();

        return response(['data' => 'Done'], 200);
    }
}
