<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __construct()
    {

    }

    public function showFormLogin()
    {
        return view('login');
    }

    public function login(Request $request) {
        if ($request['email']==='duc@gmail.com' and $request['password']==='123') {
            return view('home');
        } else {
            return view('login-error');
        }
    }
}
