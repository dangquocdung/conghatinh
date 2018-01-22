<?php

namespace App\Http\Controllers;

use App\DuThao;
use App\GopYDuThao;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DuThaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($slug=null)
    {
        if ($slug==null){

            $duthao = DuThao::orderBy('id','decs')->paginate(12);

            return view('admin.pages.gop-y-du-thao',compact('duthao'));

        }else{

            $dt = DuThao::where('slug',$slug)->first();

            $gopy = GopYDuThao::where('duthao_id',$dt->id)->orderBy('id','decs')->paginate(12);

            return view('admin.pages.gop-y-du-thao-chi-tiet',compact('gopy'));

        }

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
    public function store(Request $req)
    {
        $dt = new DuThao();
        $dt->user_id = Auth::user()->id;
        $dt->name = $req->name;
        $dt->slug = str_slug($req->name);
        $dt->thoihan = Carbon::parse($req->thoihan)->format('Y-m-d');

        //Xu ly file

        $file = $req->file('file');

        $folder = 'uploads/du-thao-van-ban/' . Carbon::now()->year . '/' . Carbon::now()->month . '/';

        $uniqid =strtolower(str_random(3));

        $nameonly = preg_replace('/\..+$/', '', $file->getClientOriginalName());

        $mainFileName = $nameonly.'_'.$uniqid . '.' . $file->getClientOriginalExtension();

        if (!file_exists(public_path($folder))) {
            mkdir(public_path($folder), 0755, true);
        }

        $req->file('file')->move(public_path($folder),$mainFileName);


        $dt->path_file = $folder.$mainFileName;

        $dt->save();

        flash('Thanh cong');

        return redirect()->back();



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
    public function update(Request $req)
    {
        $dt = DuThao::find($req->id);
        $dt->user_id = Auth::user()->id;
        $dt->name = $req->name;
        $dt->slug = str_slug($req->name);
        $dt->thoihan = Carbon::parse($req->thoihan)->format('Y-m-d');
        $dt->save();

        flash('Thanh cong');

        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DuThao  $duThao
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        DuThao::destroy($request->id);
        flash('Xóa thành công!');
        return redirect()->back();
    }
}
