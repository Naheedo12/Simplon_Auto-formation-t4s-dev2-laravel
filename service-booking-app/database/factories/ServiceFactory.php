<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake() -> sentence(),
            'description' => fake() -> paragraph(5),
            'duration' => fake() -> time(),
            'price' => fake() -> numberBetween(100, 10000),
            'image' => fake() -> imageURL(),
        ];
    }
}
