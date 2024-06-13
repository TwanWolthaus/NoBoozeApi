<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class AddictstorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create a Faker instance
        $faker = Faker::create();

        // Number of fake addict stories to create
        $numberOfStories = 100;

        // Generate fake data and insert it into the database
        for ($i = 0; $i < $numberOfStories; $i++) {
            DB::table('addictstory')->insert([
                'name' => $faker->name,
<<<<<<< HEAD
                'story' => $faker->paragraph,
=======
                'story' => $faker->text(1023), // Generates text with 1023 characters
>>>>>>> 5f9bf5710013a1579bbe696950792b7353a8ab91
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
