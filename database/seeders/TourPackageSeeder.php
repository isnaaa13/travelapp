<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TourPackage;

class TourPackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         TourPackage::create([
            'destination_id' => 1, // Bali
            'title' => 'Bali Adventure 5D4N',
            'max_pax' => 20,
            'description' => 'Paket wisata seru 5 hari 4 malam di Bali.',
            'base_price' => 3500000,
            'duration_days' => 5,
        ]);

        TourPackage::create([
            'destination_id' => 2, // Tokyo
            'title' => 'Tokyo City Tour 3D2N',
            'max_pax' => 15,
            'description' => 'Explore kota Tokyo selama 3 hari.',
            'base_price' => 7000000,
            'duration_days' => 3,
        ]);
    }
}
