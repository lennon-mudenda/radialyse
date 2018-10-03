<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MedicalTestType extends Model
{
    //
    public function tests()
    {
        return $this->hasMany('App\MedicalTest');
    }
}
