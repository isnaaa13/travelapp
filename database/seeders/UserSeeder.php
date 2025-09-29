<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminRole = Role::where('name', 'admin')->first();
        $guideRole = Role::where('name', 'guide')->first();
        $customerRole = Role::where('name', 'customer')->first();

        // Create Admin
        User::updateOrCreate(
            ['email' => 'admin@travel.com'],
            [
                'name' => 'Admin Travel',
                'password' => Hash::make('password'),
                'phone' => '081234567890',
                'role_id' => $adminRole->id
            ]
        );

        // Create Guides
        for ($i = 1; $i <= 3; $i++) {
            User::updateOrCreate(
                ['email' => "guide{$i}@travel.com"],
                [
                    'name' => "Guide {$i}",
                    'password' => Hash::make('password'),
                    'phone' => '08123456789' . $i,
                    'role_id' => $guideRole->id
                ]
            );
        }

        // Create Customers
        for ($i = 1; $i <= 5; $i++) {
            User::updateOrCreate(
                ['email' => "customer{$i}@example.com"],
                [
                    'name' => "Customer {$i}",
                    'password' => Hash::make('password'),
                    'phone' => '0812345678' . $i,
                    'role_id' => $customerRole->id
                ]
            );
        }
    }
}
