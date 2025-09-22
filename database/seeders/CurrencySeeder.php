<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Currency;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Currency::create([
            'code' => 'IDR',
            'exchange_rate' => 15000.00, // contoh kurs IDR terhadap USD
        ]);

        Currency::create([
            'code' => 'USD',
            'exchange_rate' => 1.00, // USD sebagai acuan
        ]);
    }
}
