<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MedicalCenter extends Model
{
    //
    public function prices()
    {
        return $this->hasMany('App\MedicalTestPrice');
    }


    public function subscription()
    {
        return $this->belongsTo('App\Subscription');
    }
}
