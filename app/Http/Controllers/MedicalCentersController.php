<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MedicalCenter;

class MedicalCentersController extends Controller
{
    //
    public function index(Request $request)
    {
        return view('list');
    }


    public function center(Request $request,MedicalCenter $medicalCenter)
    {
        return view('center');
    }


    public function create(Request $request)
    {
        return view('create');
    }


    public function update(Request $request,MedicalCenter $medicalCenter)
    {
        return view('update');
    }


    public function delete(Request $request,MedicalCenter $medicalCenter)
    {
        return view('delete');
    }
}
