<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

class AdminLoginController extends Controller
{
    public function index()
    {
        return view('AdminLogin');
    }
    public function login(Request $request)
    {
        $validate = Validator::make($request->all(),[
            'email' => 'required|email|string',
            'password' => 'required|min:6'
        ]);
        
        if($validate->fails())
        {
            return redirect('/load-login')->with('message', $validate->errors());
        }

        $adminCredential = array('admin@gmail.com',123456);
        $email = $request->email;
        $password = $request->password;

        if($email== $adminCredential[0] && $password==$adminCredential[1]){
           return redirect()->to('/');
        }
        else{
            return redirect('/load-login')->with('message', 'Your Email and Password does not match!');
        }

    }
}
