<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

class AdminRegisterController extends Controller
{
    public function index()
    {
        return view('AdminRegister');
    }
    public function register(Request $request)
    {
        $validate = Validator::make($request->all(),[
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email|string',
            'password' => 'required|min:6|confirmed'
        ]);
        
        if($validate->fails())
        {
            return $validate->errors();
        }
        if($validate)
        {
            return redirect()->to('/load-login');
        }
    }
}
