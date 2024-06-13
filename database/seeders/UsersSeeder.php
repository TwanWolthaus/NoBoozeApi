<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create a Faker instance
        $faker = Faker::create();

        // Number of fake users to create
        $numberOfUsers = 100;

        // Generate fake data and insert it into the database
        for ($i = 0; $i < $numberOfUsers; $i++) {
            DB::table('users')->insert([
                'user_name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'password' => bcrypt('password'), // bcrypt is used for hashing passwords
                'isAdmin' => $faker->boolean,
                'moneySaved' => $faker->randomFloat(2, 0, 10000), // float with 2 decimal places, range 0-10000
                'originalMotivation' => $faker->sentence,
                'dryDays' => $faker->numberBetween(0, 365),
                'streak' => $faker->numberBetween(0, 100),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
