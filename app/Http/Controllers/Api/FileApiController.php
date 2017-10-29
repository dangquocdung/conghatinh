<?php

namespace App\Http\Controllers\Api;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Plank\Mediable\Media;
use Plank\Mediable\MediaUploader;

class FileApiController extends Controller
{
    public function index()
    {
        $files = Media::where('aggregate_type','pdf')->orderBy('created_at', 'desc')->take(20)->get();

        return response()->json(['data' => $files], 200);
    }



    public function uploadFile(Request $request,MediaUploader $mediaUploader)
    {

        $validator = Validator::make($request->all(), [
            'file' => 'mimes:pdf'
        ]);

        // if there are validation errors, show that
        if ($validator->fails()) {
            return response(['message' => $validator->errors()], 433);
        }

        $file = $request->file('file');

        $folder = 'uploads/van-ban/' . Carbon::now()->year . '/' . Carbon::now()->month . '/';

//        $uniqid = uniqid();

        $uniqid =strtolower(str_random(3));

        $nameonly = preg_replace('/\..+$/', '', $file->getClientOriginalName());

        $mainFileName = $nameonly.'_'.$uniqid . '.' . $file->getClientOriginalExtension();

        if (!file_exists(public_path($folder))) {
            mkdir(public_path($folder), 0755, true);
        }



        $request->file('file')->move(public_path($folder),$mainFileName);


        $media = $mediaUploader->fromSource(public_path($folder) . $mainFileName)
            ->toDirectory($folder)
            ->upload();

        return response()->json(['data' => $media], 201);

    }


    public function deleteFile(Request $request)
    {

        $file = Media::find($request->input('id'));


        if (!$file) {
            return response('File not found', 400);
        }

        flash('Xóa file thành công!');

        $file->delete();

    }

}
