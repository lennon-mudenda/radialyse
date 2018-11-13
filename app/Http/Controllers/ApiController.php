<?php

namespace App\Http\Controllers;

use App\MedicalTest;
use App\MedicalTestType;
use App\SearchResult;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function types(Request $request)
    {
        $types = MedicalTestType::all();
        return response()->json($types);
    }

    public function tests(Request $request,MedicalTestType $medicalTestType)
    {
        $tests = $medicalTestType->tests();
        return response()->json($tests);
    }

    public function search(Request $request,MedicalTest $medicalTest)
    {
        $resultSearch = new SearchResult($medicalTest);
        return response()->json($resultSearch->getResults());
    }
}
