<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Service;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Booking>
 */
class BookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            
           // 'service_id' => Service::factory(),
            'date' => fake()->date(),
            'time' => fake()->time(),
            'status' => fake()->randomElement(['waiting', 'confirmed', 'cancelled']),
        ];
    }
}
