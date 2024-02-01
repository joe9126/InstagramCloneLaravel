<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profile>
 */
class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //'id'=>fake()->unique()->numberBetween(1,10),
            'user_id'=>fake()->unique()->numberBetween(1,10),
            'title'=>fake()->name(),
            'description'=>fake()->paragraph(3),
            'url'=>fake()->url()
        ];
    }
}
