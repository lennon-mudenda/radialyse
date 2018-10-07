<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MedicalCenter;

class MedicalCentersController extends Controller
{
    //
    public function index(Request $request)
    {
        $centers = MedicalCenter::all();
        return view('dashboard.medical_centers')->with('centers' , $centers);
    }


    public function center(Request $request,MedicalCenter $medicalCenter)
    {
        return view('dashboard.medical_centers')->with('center' , $medicalCenter);
    }


    public function create(Request $request)
    {
        return view('dashboard.partials.medical_center_form');
    }


    public function save(Request $request)
    {
        //validate form data
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'address' => 'required',
            'longitude' => 'required',
            'latitude' => 'required',
            'phone' => 'required'
        ]);

        /*if ($validator->fails()) {
            return redirect('post/create')
                        ->withErrors($validator)
                        ->withInput();
        }*/
        $center = new MedicalCenter;
        $center->name = $request->input('name');
        $center->address = $request->input('name');
        $center->long = $request->input('longitude');
        $center->lat = $request->input('latitude');
        $center->phone = $request->input('phone');
        $center->save();
        return view('save');
    }


    public function update(Request $request,MedicalCenter $medicalCenter)
    {
        //validate form data
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'address' => 'required',
            'longitude' => 'required',
            'latitude' => 'required',
            'phone' => 'required'
        ]);

        /*if ($validator->fails()) {
            return redirect('post/create')
                        ->withErrors($validator)
                        ->withInput();
        }*/
        $medicalCenter->name = $request->input('name');
        $medicalCenter->address = $request->input('name');
        $medicalCenter->long = $request->input('longitude');
        $medicalCenter->lat = $request->input('latitude');
        $medicalCenter->phone = $request->input('phone');
        $medicalCenter->update();
        return view('update');
    }


    public function delete(Request $request,MedicalCenter $medicalCenter)
    {
        $medicalCenter->delete();
        return view('delete');
    }
}
