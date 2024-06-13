<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MedalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Insert specific sample data into the medals table
        DB::table('medal')->insert([

            // Medals for staying dry
            [
                'name' => 'Diamond Medal',
                'description' => 'Stay dry for 3 years.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Platinum Medal',
                'description' => 'Stay dry for 2 years.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Gold Medal',
                'description' => 'Stay dry for 1 year.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Silver Medal',
                'description' => 'Stay dry for 6 months.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bronze Medal',
                'description' => 'Stay dry for 3 months.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Copper Medal',
                'description' => 'Stay dry for a month.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Iron Medal',
                'description' => 'Stay dry for 2 weeks.',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Medals for saving money
            [
                'name' => 'Orchid Medal',
                'description' => 'Save 25000.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Rose Medal',
                'description' => 'Save 10000.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Tulip Medal',
                'description' => 'Save $5000.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Lily Medal',
                'description' => 'Save $2500.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sunflower Medal',
                'description' => 'Save $1000.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Daisy Medal',
                'description' => 'Save $500.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Daffodil Medal',
                'description' => 'Save $250.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

