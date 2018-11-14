<?php

use Illuminate\Database\Seeder;

class MedicalTestPricesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tests = \App\MedicalTest::all();
        $centers = \App\MedicalCenter::all();
        foreach ($tests as $test)
        {
            foreach ($centers as $center)
            {
                $price = new \App\MedicalTestPrice;
                $price->medical_center_id = $center->id;
                $price->medical_test_id = $test->id;
                $price->price = rand(500,2000);
                $price->save();
            }
        }
    }
}
