<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Driver;

class DriversTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Driver::truncate();

        $faker = \Faker\Factory::create('en_NG');

        for ($i = 0; $i < 10; $i++) {
            Driver::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'phonenumber' => $faker->phoneNumber,
                'address' => $faker->address,
                'driver_licence_number' => $faker->uuid,
                'date_of_birth' => $faker->date

            ]);
        }
    }
}
