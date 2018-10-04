<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\MedicalTest;

class MedicalTestsController extends Controller
{
    //
    public function index(Request $request)
    {
        return view('medical_centers');
    }


    public function test(Request $request,MedicalTest $medicalTest)
    {
        return view('medical_center');
    }


    public function create(Request $request)
    {
        return view('create');
    }


    public function save(Request $request)
    {
        return view('save');
    }


    public function update(Request $request,MedicalTest $medicalTest)
    {
        return view('update');
    }


    public function delete(Request $request,MedicalTest $medicalTest)
    {
        return view('delete');
    }
}
