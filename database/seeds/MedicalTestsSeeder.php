<?php

use Illuminate\Database\Seeder;

class MedicalTestsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0;$i < 20;$i++)
        {
            $test = new \App\MedicalTest;
            $test->medical_test_type_id = ($i % 2) + 1;
            $test->name = "test ".$i;
            $test->save();
        }
    }
}
