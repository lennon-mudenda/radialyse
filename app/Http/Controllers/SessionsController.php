<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    //
    public function create(Request $request)
    {
        return view('login');
    }


    public function save(Request $request)
    {
        return view('dashboard');
    }


    public function destroy(Request $request)
    {
        return view('login');
    }
}
