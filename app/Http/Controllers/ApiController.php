<?php

namespace App\Http\Controllers;

use App\MedicalTest;
use App\MedicalTestType;
use App\SearchResult;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function types(Request $request,$API_KEY)
    {
        if ($API_KEY != "radialyse133")
        {
            return response()->json(["message"=>"you are not authorised to access this api"]);
        }
        $types = MedicalTestType::all();
        return response()->json($types);
    }

    public function tests(Request $request,MedicalTestType $medicalTestType,$API_KEY)
    {
        if ($API_KEY != "radialyse133")
        {
            return response()->json(["message"=>"you are not authorised to access this api"]);
        }
        $tests = $medicalTestType->tests;
        return response()->json($tests);
    }

    public function search(Request $request,MedicalTest $medicalTest,$API_KEY)
    {
        if ($API_KEY != "radialyse133")
        {
            return response()->json(["message"=>"you are not authorised to access this api"]);
        }
        $resultSearch = new SearchResult($medicalTest);
        return response()->json($resultSearch->getResults());
    }
}
