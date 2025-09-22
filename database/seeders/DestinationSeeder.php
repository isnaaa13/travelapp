<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Destination;

class DestinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Destination::create([
            'name' => 'Bali',
            'country' => 'Indonesia',
            'description' => 'Pulau wisata terkenal dengan pantai dan budaya.',
        ]);

        Destination::create([
            'name' => 'Tokyo',
            'country' => 'Japan',
            'description' => 'Kota metropolitan modern dengan budaya unik.',
        ]);
    }
}
