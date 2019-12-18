<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Sentinel;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.user.index',compact('users'));
    }

    public function tambah()
    {
        return view('admin.user.register');
    }

    public function simpan(Request $request)
    {
        Sentinel::registerAndActivate($request->all());
        return redirect('/user')->with('success','Data berhasil disimpan');
    }
}
