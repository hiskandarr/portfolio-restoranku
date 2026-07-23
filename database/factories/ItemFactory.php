<?php

namespace Database\Factories;

use App\Models\Item;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Item>
 */
class ItemFactory extends Factory
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
            'category_id' => fake()->numberBetween(1, 2),
            'price' => fake()->randomFloat(1, 1000, 100000),
            'description' => fake()->text(),
            'img' => fake()->imageUrl(),
            'is_active' => fake()->boolean(),
        ];
    }
}
