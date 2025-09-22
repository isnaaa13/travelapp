<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Review;
use Carbon\Carbon;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::create([
            'booking_id' => 1,
            'customer_id' => 1,
            'rating' => 5,
            'comment' => 'Pengalaman liburan di Bali sangat menyenangkan!',
            'review_date' => Carbon::now()->toDateString(), // isi dengan tanggal hari ini
        ]);
    }
}
