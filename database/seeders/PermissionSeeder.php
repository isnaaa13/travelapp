<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            // Destination Management
            ['name' => 'manage_destinations', 'display_name' => 'Manage Destinations', 'group' => 'destination', 'description' => 'Add, edit, delete destinations'],
            ['name' => 'view_destinations', 'display_name' => 'View Destinations', 'group' => 'destination', 'description' => 'View all destinations'],

            // Tour Package Management
            ['name' => 'manage_tour_packages', 'display_name' => 'Manage Tour Packages', 'group' => 'tour_package', 'description' => 'Add, edit, delete tour packages'],
            ['name' => 'view_tour_packages', 'display_name' => 'View Tour Packages', 'group' => 'tour_package', 'description' => 'View all tour packages'],

            // Booking Management
            ['name' => 'create_booking', 'display_name' => 'Create Booking', 'group' => 'booking', 'description' => 'Customers can create bookings'],
            ['name' => 'view_all_bookings', 'display_name' => 'View All Bookings', 'group' => 'booking', 'description' => 'Admin can view all bookings'],
            ['name' => 'view_own_bookings', 'display_name' => 'View Own Bookings', 'group' => 'booking', 'description' => 'Customers can view their own bookings'],
            ['name' => 'cancel_booking', 'display_name' => 'Cancel Booking', 'group' => 'booking', 'description' => 'Cancel bookings if allowed'],

            // Itinerary Management
            ['name' => 'manage_itineraries', 'display_name' => 'Manage Itineraries', 'group' => 'itinerary', 'description' => 'Create and update itineraries for bookings'],

            // Guide Assignment
            ['name' => 'assign_guides', 'display_name' => 'Assign Guides', 'group' => 'guide', 'description' => 'Assign guides to tour packages and bookings'],

            // Review Management
            ['name' => 'manage_reviews', 'display_name' => 'Manage Reviews', 'group' => 'review', 'description' => 'Moderate and delete reviews'],

            // Currency Management
            ['name' => 'manage_currency', 'display_name' => 'Manage Currency', 'group' => 'currency', 'description' => 'Add or edit supported currencies'],
        ];

        foreach ($permissions as $permission) {
            Permission::create($permission);
        }
    }
}
