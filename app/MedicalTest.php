<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MedicalTest extends Model
{
    //
    public function test_prices()
    {
        return $this->hasMany('App\MedicalTestPrice');
    }
}
