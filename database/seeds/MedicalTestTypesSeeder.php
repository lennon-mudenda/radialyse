<?php

use Illuminate\Database\Seeder;

class MedicalTestTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $t1 = new \App\MedicalTestType;
        $t1->name = "Analyse";
        $t1->save();
        $t2 = new \App\MedicalTestType;
        $t2->name = "Imagerie";
        $t2->save();

    }
}
