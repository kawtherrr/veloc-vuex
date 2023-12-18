<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vehicle>
 */
class VehicleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'agency_id' => '150332',
            'license_plate' => Str::random(10),
            'production_year' =>fake()->numberBetween(2007, 2023),
            'model' => Str::random(5),
            'color' => fake()->randomElement(['blue','black','red','yellow','gray']),
            'number_seats' => fake()->numberBetween(2, 8),
            'vehicle_model' => fake()->randomElement(['van','luxe car','car']),
        ];
    }
}
