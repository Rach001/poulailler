<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VerifyController extends Controller
{
    public function index()
    {
        return view('Verify');
    }
    public function verification(Request $request)
    {
        return redirect('/load-login');
    }
}
