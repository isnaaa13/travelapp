<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\GuideAssignment;
use Carbon\Carbon;

class GuideAssignmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        GuideAssignment::create([
            'booking_id'   => 1,
            'guide_id'     => 1,
            'assigned_date'=> Carbon::now()->toDateString(), // isi dengan tanggal hari ini
        ]);
    }
}
