<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;
use Validator;
use App\Album;

class AlbumController extends Controller
{

    public function index()
    {
        $albums = Album::with('Photos')->orderby('id','desc')->paginate(12);
        return view('admin.pages.album',compact('albums'));
        
    }


    public function store(Request $request)
    {
        $v = Validator::make($request->all(),
            [
                'name' => 'required|min:10|max:191',
            ]
        );

        if ($v->fails())
        {
            return redirect()->back()->withErrors($v->errors());
        }

        $ab = new Album();

        $ab->name = $request->input('name');

        $ab->slug = str_slug($request->input('name'));

        $ab->cover_image = $request->input('cover_image');

        $ab->save();

        flash('Thêm album thành công');

        return redirect()->back();
    }


    public function getList()
    {
        $albums = Album::with('Photos')->get();
        return view('index')->with('albums',$albums);
    }

    public function getAlbum($id)
    {
        $album = Album::with('Photos')->find($id);
        $albums = Album::with('Photos')->get();
        //dd($album);
        return view('album', ['album'=>$album, 'albums'=>$albums]);
        //->with('album',$album);
    }

    public function getForm()
    {
        return view('createalbum');
    }

    public function postCreate(Request $request)
    {
        /*$rules = array(

          'name' => 'required',
          'cover_image'=>'required|image'

      );*/

        $rules = ['name' => 'required', 'cover_image'=>'required|image'];

        $input = ['name' => null];

        //Validator::make($input, $rules)->passes(); // true

        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
            // return Redirect::route('create_album_form') ;
            return redirect()->route('create_album_form')->withErrors($validator)->withInput();
        }

        // $file = Input::file('cover_image');
        $file = $request->file('cover_image');
        $random_name = str_random(8);
        $destinationPath = 'albums/';
        $extension = $file->getClientOriginalExtension();
        $filename=$random_name.'_cover.'.$extension;
        $uploadSuccess = $request->file('cover_image')->move($destinationPath, $filename);
        $album = Album::create(array(
            'name' => $request->get('name'),
            'description' => $request->get('description'),
            'cover_image' => $filename,
        ));

        return redirect()->route('show_album',['id'=>$album->id]);
    }

    public function getDelete($id)
    {
        $album = Album::find($id);

        $album->delete();

        return Redirect::route('index');
    }
}
