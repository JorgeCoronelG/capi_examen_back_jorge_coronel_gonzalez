<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class UserDomicilioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'domicilio' => fake()->streetName(),
            'numero_exterior' => fake()->numberBetween(1, 1000),
            'colonia' => fake()->streetSuffix(),
            'cp' => fake()->numberBetween(10000, 99999),
            'ciudad' => fake()->city()
        ];
    }
}
