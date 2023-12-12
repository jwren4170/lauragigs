<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Listing>
 */
class ListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->words(3, true),
            'tags' => fake()->words(3, true),
            'company' => fake()->company(),
            'location' => fake()->city(),
            'email' => fake()->email(),
            'website' => fake()->word() . '@.com',
            'description' => fake()->paragraph()
        ];
    }
}
