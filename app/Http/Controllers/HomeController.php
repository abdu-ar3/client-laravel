<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function index()
    {
        return view('home');
    }

    // public function login()
    // {
    //     // return view('auth.login');
    //     return redirect()->route('auth.login')->with('status', 'Login
    //    failed');
    // }
}
