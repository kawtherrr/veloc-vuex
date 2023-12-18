<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Vehicle;
use Illuminate\Database\Seeder;
use Database\Seeders\CitySeeder;
use Database\Seeders\WilayaSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //      $this->call([
        //      WilayaSeeder::class,
        //      CitySeeder::class,
  
        //  ]);

         Vehicle::factory(10)->create();

         //  \App\Models\User::factory()->create([
         //     'name' => 'Test User',
         //     'email' => 'test@example.com',
         //  ]);
    }
}
