<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Seeders\PlanetSeeder;
use Database\Seeders\CometSeeder;
use Database\Seeders\ConstellationSeeder;
use Database\Seeders\ObservatorySeeder;
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

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            PlanetSeeder::class,
            CometSeeder::class,
            ConstellationSeeder::class,
            ObservatorySeeder::class,
            NewsSeeder::class,
        ]);
    }
    
}
