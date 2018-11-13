<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MedicalTestPrice extends Model
{
    //
    public function center()
    {
        return $this->belongsTo('App\MedicalCenter');
    }


    public function test()
    {
        return $this->belongsTo('App\MedicalTest');
    }
}
