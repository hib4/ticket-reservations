<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Destination>
 */
class DestinationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->sentence(2),
            'description' => fake()->paragraph(),
            'city' => fake()->city(),
            'country' => 'Indonesia',
            'image' => fake()->imageUrl(360, 360, 'destinations', true),
            'price' => fake()->randomFloat(2, 1000, 10000),
            'discount' => fake()->randomFloat(2, 0, 1),
        ];
    }
}
