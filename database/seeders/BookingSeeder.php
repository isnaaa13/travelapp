<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Booking;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Booking::create([
            'customer_id' => 1,
            'package_id' => 1,
            'booking_date' => now(),
            'pax' => 2,
            'start_date' => '2025-10-01',
            'end_date' => '2025-10-05',
            'total_price' => 7000000,
            'currency_id' => 1, // IDR
            'status' => 'confirmed',
        ]);
    }
}
