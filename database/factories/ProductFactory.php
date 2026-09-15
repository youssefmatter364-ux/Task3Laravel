<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->unique()->words(2, true),
            'description' => fake()->sentence(),
            'price' => fake()->randomFloat(2, 50, 1000),
            'quantity' => fake()->numberBetween(1, 50),
            'category_id' => Category::inRandomOrder()->value('id'),
        ];
    }
}