<?php

namespace App\Http\Controllers;

use App\CoQuan;
use Illuminate\Http\Request;
use Session;
use App\NhomCQ;

class CoQuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nhomcq = NhomCQ::all();
        $coquan = CoQuan::orderBy('id', 'desc')->paginate(20);

        if (Session::has('nhomcq_id')){
            $nhomcq_id = Session::get('nhomcq_id');
        }else{
            $nhomcq_id = 1;
        }

        return view('admin.pages.tbt.lien-ket', compact('nhomcq','coquan','nhomcq_id'));
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
        $cq = CoQuan::create([
            'nhomcq_id'=>$request->input('nhomcq_id'),
            'name' => $request->input('name'),
            'slug'=>str_slug($request->input('name')),
            'lienket'=>($request->input('lienket'))
        ]);

//        event(new LoaiTinCreated($loaitin));

        flash('Thêm liên kết thành công');


        Session::put('nhomcq_id', $request->input('nhomcq_id'));

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CoQuan  $coQuan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $nhomcq = NhomCQ::all();
        $lienket = CoQuan::find($id);

        return view('admin.pages.tbt.lien-ket-edit', compact('nhomcq','lienket'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CoQuan  $coQuan
     * @return \Illuminate\Http\Response
     */
    public function edit(CoQuan $coQuan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CoQuan  $coQuan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $lk = CoQuan::find($request->input('id'));
        $lk->nhomcq_id = $request->input('nhomcq_id');
        $lk->name = $request->input('name');
        $lk->slug = str_slug($request->input('name'));
        $lk->lienket = $request->input('lienket');
        $lk->save();

        flash('Liên kết đã được cập nhật');
        return redirect( route('lien-ket'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CoQuan  $coQuan
     * @return \Illuminate\Http\Response
     */
    public function destroy(CoQuan $coQuan)
    {
        //
    }
}
