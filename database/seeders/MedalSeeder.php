<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MedalsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Insert specific sample data into the medals table
        DB::table('medals')->insert([
            [
                'name' => 'Gold Medal',
                'description' => 'Awarded for outstanding performance.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Silver Medal',
                'description' => 'Awarded for excellent performance.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bronze Medal',
                'description' => 'Awarded for great performance.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Participation Medal',
                'description' => 'Awarded for participation.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

