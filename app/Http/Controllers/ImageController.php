<?php

namespace App\Http\Controllers;

class ImageController extends Controller
{
    public function index()
    {
        return view('images.index');
    }
}
