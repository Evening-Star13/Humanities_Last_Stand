<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Livestock>
 */
class LivestockFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'first-name' => fake()->name(),
            'last-name' => fake()->name(),
            'gender' => fake()->randomElement(['male', 'female']),
            'DOB' => fake()->date(),
            'email' => fake()->email(),
            'background' => fake()->realText(250)
        ];
    }
}
