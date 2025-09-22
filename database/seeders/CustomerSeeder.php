<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Customer;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Customer::create([
            'name' => 'Budi Santoso',
            'email' => 'budi@example.com',
            'phone' => '081234567890',
            'nationality' => 'Indonesia',
        ]);

        Customer::create([
            'name' => 'Siti Aminah',
            'email' => 'siti@example.com',
            'phone' => '089876543210',
            'nationality' => 'Malaysia',
        ]);
    }
}
