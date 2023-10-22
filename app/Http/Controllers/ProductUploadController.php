<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductUploadController extends Controller
{
    public function index()
    {
        return view('ProductUpload');
    }
}
