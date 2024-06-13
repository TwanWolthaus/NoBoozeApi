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
<<<<<<< HEAD
        
=======
        // Call all the necessary seeders
        $this->call([
            UsersSeeder::class,
            MedalsSeeder::class,
            AddictstorySeeder::class,
            UserMedalSeeder::class,
        ]);
>>>>>>> a7ffa8d3742643995c29819204160ab3570d5dd8
    }
}

