<?php
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class MedicalCentersSeeder extends Seeder
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
            $faker = new Faker;
            $center = new \App\MedicalCenter;
            $center->name = $faker->company;
            $center->long = $faker->longitude;
            $center->lat = $faker->latitude;
            $center->phone = $faker->phoneNumber;
            $center->address = $faker->address;
            $center->save();
        }
    }
}
