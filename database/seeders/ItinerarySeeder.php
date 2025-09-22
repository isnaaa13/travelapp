<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Itinerary;

class ItinerarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Itinerary::create([
            'booking_id' => 1,
            'day_number' => 1,
            'activity_description' => 'Kunjungan ke Pantai Kuta',
        ]);
    }
}
