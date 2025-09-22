<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $this->call([
        CustomerSeeder::class,
        DestinationSeeder::class,
        TourPackageSeeder::class,
        CurrencySeeder::class,
        BookingSeeder::class,
        ReviewSeeder::class,
        ItinerarySeeder::class,
        GuideSeeder::class,
        GuideAssignmentSeeder::class,
    ]);
    
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
