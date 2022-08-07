<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function postlogin()
    {
        if(Auth::attempt($request->only('email', 'password'))){
            return redirect('/home');
        }
        return redirect('/');
    }
}
