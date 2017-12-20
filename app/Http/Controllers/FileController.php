<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    public function index()
    {
        return view('admin.pages.file-manager');
    }

    public function getIcons()
    {
        return view('admin.pages.icons');
    }
}
