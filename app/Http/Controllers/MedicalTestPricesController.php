<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MedicalTest;
use App\MedicalCenter;
use App\MedicalTestPrice;

class MedicalTestPricesController extends Controller
{
    //
    public function index(Request $request)
    {
        return view('prices');
    }


    public function price(Request $request,MedicalCenter $medicalCenter,MedicalTest $medicalTest,MedicalTestPrice $medicalTestPrice)
    {
        return view('price');
    }


    public function create(Request $request)
    {
        return view('create');
    }


    public function save(Request $request)
    {
        return view('save');
    }


    public function update(Request $request,MedicalTestPrice $medicalTestPrice)
    {
        return view('update');
    }


    public function delete(Request $request,MedicalTestPrice $medicalTestPrice)
    {
        return view('delete');
    }
}
