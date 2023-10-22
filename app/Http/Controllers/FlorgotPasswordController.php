<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FlorgotPasswordController extends Controller
{
    public function index()
    {
            return view('ForgotPassword');
    }
    public function findPassword(Request $request)
    {
        $adminCredential = array('admin@gmail.com');
        
        if($request->email == $adminCredential[0])
        {
            return view('/verify');
        }
    }
}
