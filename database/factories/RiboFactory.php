<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Dojo;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ribo>
 */
class RiboFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'bio' => fake()->realText(500),
            'skill' => fake()->numberBetween(1,100),
            'status' => fake()->randomElement(['complete','incomplete','progress']),
            'age' => fake()->numberBetween(13,99),
            // 'dojos_id' => Dojo::inRandomOrder()->first()->id
        ];
    }
}

