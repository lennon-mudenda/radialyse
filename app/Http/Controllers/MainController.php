<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    public function index(Request $request)
    {
        return view('clientSide.index');
    }


    public function dashboard(Request $request)
    {
        return view('dashboard.index');
    }

    public function search()
    {
        return view('clientSide.search');
    }
}
?>