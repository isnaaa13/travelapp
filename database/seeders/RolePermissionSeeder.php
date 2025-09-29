<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Role;
use App\Models\Permission;
use Illuminate\Database\Seeder;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Admin gets all permissions
        $adminRole = Role::where('name', 'admin')->first();
        $allPermissions = Permission::all();
        $adminRole->permissions()->attach($allPermissions);

        // Guide permissions
        $guideRole = Role::where('name', 'guide')->first();
        $guidePermissions = Permission::whereIn('name', [
            'view_destinations',
            'view_tour_packages',
            'manage_itineraries',
            'assign_guides',
            'manage_reviews', // jika guide juga bisa moderasi review
        ])->get();
        $guideRole->permissions()->attach($guidePermissions);

        // Customer permissions
        $customerRole = Role::where('name', 'customer')->first();
        $customerPermissions = Permission::whereIn('name', [
            'view_destinations',
            'view_tour_packages',
            'create_booking',
            'view_own_bookings',
            'cancel_booking',
        ])->get();
        $customerRole->permissions()->attach($customerPermissions);
    }
}
