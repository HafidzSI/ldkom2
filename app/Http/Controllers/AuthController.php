<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Sentinel;

class AuthController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        sleep(1);
        Sentinel::authenticate($request->all());
        return redirect('/');
    }

    public function logout()
    {
        Sentinel::logout();
        return redirect('/masuk');
    }
}
