<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\MedicalTest;

class MedicalTestsController extends Controller
{
    //
    public function index(Request $request)
    {
        $tests = MedicalTest::all();
        return view('dashboard.medical_tests')->with('tests',$tests);
    }


    public function test(Request $request,MedicalTest $medicalTest)
    {
        return view('medical_center')->with('test',$medicalTest);
    }


    public function create(Request $request)
    {
        return view('create');
    }


    public function save(Request $request)
    {
        $validator = Validator::make($request->all(),[
           'type_id' => 'required',
            'name'   => 'required'
        ]);

        if ($validator->fails())
        {

        }

        $test = new MedicalTest;
        $test->type_id = $request->input('type_id');
        $test->name = $request->input('name');
        $test->save();
        return view('save');
    }


    public function update(Request $request,MedicalTest $medicalTest)
    {
        $validator = Validator::make($request->all(),[
            'type_id' => 'required',
            'name'   => 'required'
        ]);

        $medicalTest->type_id = $request->input('type_id');
        $medicalTest->name = $request->input('name');
        $medicalTest->update();
        return view('update');
    }


    public function delete(Request $request,MedicalTest $medicalTest)
    {
        $medicalTest->delete();
        return view('delete');
    }
}
