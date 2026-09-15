<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\Order_Item;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderItemFactory extends Factory
{
    protected $model = Order_Item::class;

    public function definition(): array
    {
        return [
            'order_id' => Order::inRandomOrder()->value('id'),
            'product_id' => Product::inRandomOrder()->value('id'),
            'quantity' => fake()->numberBetween(1, 5),
            'price' => fake()->randomFloat(2, 50, 1000),
        ];
    }
}