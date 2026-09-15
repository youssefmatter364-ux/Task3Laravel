<?php

namespace Database\Seeders;

use App\Models\Order_Item;
use Illuminate\Database\Seeder;

class OrderItemSeeder extends Seeder
{
    public function run(): void
    {
        Order_Item::create([
            'order_id' => 1,
            'product_id' => 1,
            'quantity' => 2,
            'price' => 300
        ]);

        Order_Item::create([
            'order_id' => 1,
            'product_id' => 3,
            'quantity' => 1,
            'price' => 800
        ]);

        Order_Item::create([
            'order_id' => 2,
            'product_id' => 2,
            'quantity' => 1,
            'price' => 450
        ]);

        Order_Item::create([
            'order_id' => 2,
            'product_id' => 5,
            'quantity' => 1,
            'price' => 1200
        ]);

        Order_Item::create([
            'order_id' => 3,
            'product_id' => 4,
            'quantity' => 2,
            'price' => 900
        ]);

        Order_Item::create([
            'order_id' => 3,
            'product_id' => 7,
            'quantity' => 1,
            'price' => 700
        ]);

        Order_Item::create([
            'order_id' => 4,
            'product_id' => 6,
            'quantity' => 1,
            'price' => 1500
        ]);

        Order_Item::create([
            'order_id' => 4,
            'product_id' => 9,
            'quantity' => 2,
            'price' => 250
        ]);

        Order_Item::create([
            'order_id' => 5,
            'product_id' => 8,
            'quantity' => 1,
            'price' => 1000
        ]);

        Order_Item::create([
            'order_id' => 5,
            'product_id' => 10,
            'quantity' => 1,
            'price' => 400
        ]);
    }
}