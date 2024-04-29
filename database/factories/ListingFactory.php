<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
            'title' => fake()->sentence(),
            'tags' => 'Music, Festival, Events',
            'organizer' => fake()->sentence(),
            'location' => fake()->city(),
            'email' => fake()->unique()->safeEmail(),
            'contact_number' => '0' . fake()->numberBetween(90000000000, 99999999999),
            'description' => fake()->paragraph(5),
        ];
    }
}
