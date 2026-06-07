<?php

namespace Database\Factories;

use App\Models\LearningTopic;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<LearningTopic>
 */
class LearningTopicFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->unique()->word(),
            'description' => fake()->sentence(10),
            'icon' => fake()->imageUrl(120, 120, 'people'),
            'color' => fake()->unique()->colorName(),
            'order_index' => fake()->integer(),
        ];
    }
}
