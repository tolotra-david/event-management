<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Factory>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = fake()->unique()->sentence(3);
        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'description' => fake()->text,
            'start_time' => fake()->dateTimeBetween('now', '+1 month'),
            'end_time' => fake()->dateTimeBetween('+1 month', '+2 months'),
        ];
    }
}
