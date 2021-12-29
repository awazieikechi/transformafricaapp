<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Customer;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Customer::truncate();

        $faker = \Faker\Factory::create('en_NG');

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 10; $i++) {
            Customer::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'phonenumber' => $faker->phoneNumber,
                'address' => $faker->address,

            ]);
        }
    }
}
