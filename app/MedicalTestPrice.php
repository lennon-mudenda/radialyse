<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MedicalTestPrice extends Model
{
    //
    public function center()
    {
        return $this->belongsTo('App\MedicalCenter','medical_center_id');
    }


    public function test()
    {
        return $this->belongsTo('App\MedicalTest','medical_test_id');
    }
}
