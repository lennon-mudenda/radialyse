<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MedicalTest extends Model
{
    //
    public function prices()
    {
        return $this->hasMany('App\MedicalTestPrice');
    }

    public function type()
    {
        return $this->belongsTo('App\MedicalTestType','medical_test_type_id');
    }
}
