<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    public function index(Request $request)
    {
        return view('home');
    }


    public function dashboard()
    {
        return view('dashboard');
    }
}
