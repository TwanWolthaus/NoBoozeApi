<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserMedalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Fetch all user IDs and medal IDs
        $userIDs = DB::table('users')->pluck('id')->toArray();
        $medalIDs = DB::table('medals')->pluck('id')->toArray();

        // Number of fake user-medal relationships to create
        $numberOfUserMedals = 50;

        // Generate fake data and insert it into the database
        for ($i = 0; $i < $numberOfUserMedals; $i++) {
            DB::table('user_medals')->insert([
                'user_id' => $userIDs[array_rand($userIDs)],
                'medal_id' => $medalIDs[array_rand($medalIDs)],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
