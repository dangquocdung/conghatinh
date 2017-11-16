<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $events = Event::orderby('id','desc')->paginate(12);

        return view('admin.pages.calendar',compact('events'));
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
        $v = Validator::make($request->all(),[

            'title'=>'required|min:10|max:191',
            'start_date' =>'required',
            'start_date' =>'required'
        ]);

        if ($v->fails()){
            return redirect()->back()->withErrors($v->errors());
        }

        $ev = new Event();
        $ev->title = $request->title;
        $ev->start_date = Carbon::parse($request->start_date);
        $ev->end_date = Carbon::parse($request->end_date);

        $ev->save();

        flash('Thêm Lịch làm việc thành công');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->input('id');


        $ev = Event::find($id);

        $ev->delete();

        return response(['data' => 'Lịch làm việc đã bị xoá'], 200);
    }
}
