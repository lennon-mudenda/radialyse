<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(MedicalTestTypesSeeder::class);
        $this->call(MedicalCentersSeeder::class);
        $this->call(MedicalTestsSeeder::class);
        $this->call(MedicalTestPricesSeeder::class);
    }
}
