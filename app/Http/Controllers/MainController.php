<?php

namespace App\Http\Controllers;

use App\MedicalTestType;
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
        $types = MedicalTestType::all();
        return view('clientSide.search')->with('types',$types);
    }
}
?>