<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ticket>
 */
class TicketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'destination_id' => fake()->randomDigit(0),
            'full_name' => fake()->name(),
            'email' => fake()->safeEmail(),
            'phone_number' => fake()->phoneNumber(),
            'nop' => fake()->randomDigit(0),
            'reservation' => now(),
        ];
    }
}
