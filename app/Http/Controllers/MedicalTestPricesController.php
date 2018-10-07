<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\MedicalTest;
//use App\MedicalCenter;
use App\MedicalTestPrice;

class MedicalTestPricesController extends Controller
{
    //
    public function index(Request $request)
    {

        return view('prices');
    }


    public function price(Request $request,MedicalTestPrice $medicalTestPrice)
    {
        return view('price');
    }


    public function create(Request $request)
    {
        return view('create');
    }


    public function save(Request $request)
    {
        $validator = Validator::make($request->all(),[
            "price" => "required",
            "test_id" => "required",
            "center_id" => "required",
        ]);

        if ($validator->fails())
        {

        }
        $medicalTestPrice = new MedicalTestPrice;
        $medicalTestPrice->price = $request->input('price');
        $medicalTestPrice->test_id = $request->input('test_id');
        $medicalTestPrice->center_id = $request->input('center_id');
        $medicalTestPrice->save();
        return view('save');
    }


    public function update(Request $request,MedicalTestPrice $medicalTestPrice)
    {
        $validator = Validator::make($request->all(),[
            "price" => "required"
        ]);

        if ($validator->fails())
        {

        }

        $medicalTestPrice->price = $request->input('price');
        $medicalTestPrice->update();
        return view('update');
    }


    public function delete(Request $request,MedicalTestPrice $medicalTestPrice)
    {
        $medicalTestPrice->delete();
        return view('delete');
    }
}
