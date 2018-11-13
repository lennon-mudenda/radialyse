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
}
