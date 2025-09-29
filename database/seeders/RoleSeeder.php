<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            [
                'name' => 'admin',
                'display_name' => 'System Administrator',
                'description' => 'Full system access and management capabilities, can manage destinations, tour packages, bookings, guides, and reviews',
                'is_active' => true
            ],
            [
                'name' => 'guide',
                'display_name' => 'Tour Guide',
                'description' => 'Handles assigned tours, assists customers during trips, and manages itineraries',
                'is_active' => true
            ],
            [
                'name' => 'customer',
                'display_name' => 'Customer',
                'description' => 'Regular users who can browse destinations, book tours, and provide reviews',
                'is_active' => true
            ]
        ];

        foreach ($roles as $role) {
            Role::updateOrCreate(
                ['name' => $role['name']], // cek berdasarkan name
                $role
            );
        }
    }
}
