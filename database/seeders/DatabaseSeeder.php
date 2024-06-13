<?php

namespace Database\Seeders;

use App\Models\User; // Ensure this line is kept
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Call all the necessary seeders
        $this->call([
            UsersSeeder::class,
            MedalSeeder::class,
            AddictstorySeeder::class,
            UserMedalSeeder::class,
        ]);
    } 
}

