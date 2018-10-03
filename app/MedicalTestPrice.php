<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MedicalTestPrice extends Model
{
    //
    public function medical_center()
    {
        return $this->belongsTo('App\MedicalCenter');
    }


    public function medical_test()
    {
        return $this->belongsTo('App\MedicalTest');
    }
}
