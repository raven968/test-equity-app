<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Bedroom;

class BedroomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $bedrooms = [];

        for ($i = 1; $i <= 12; $i++) {
            $bedrooms[] = [
                'description' => "Habitación $i",
                'capacity' => rand(1, 3)
            ];
        }

        Bedroom::insert($bedrooms);
    }
}
