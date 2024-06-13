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
            DB::table('addictstories')->insert([
                'name' => $faker->name,
                'story' => $faker->paragraph, // Generates a paragraph of text
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}