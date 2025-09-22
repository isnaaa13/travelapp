<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Guide;

class GuideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Guide::create([
            'name' => 'Made Sujana',
            'phone' => '081298765432',
            'language' => 'Indonesia, English',
            'rating' => 4.7,
        ]);
    }
}
