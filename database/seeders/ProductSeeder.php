<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::create([
            'name' => 'Blue T Shirt',
            'description' => 'Comfortable blue cotton t shirt',
            'price' => 300,
            'quantity' => 20,
            'category_id' => 1
        ]);

        Product::create([
            'name' => 'Black Shirt',
            'description' => 'Classic black shirt for men',
            'price' => 450,
            'quantity' => 15,
            'category_id' => 1
        ]);

        Product::create([
            'name' => 'White Sneakers',
            'description' => 'Modern white sneakers for daily use',
            'price' => 800,
            'quantity' => 10,
            'category_id' => 2
        ]);

        Product::create([
            'name' => 'Black Shoes',
            'description' => 'Elegant black shoes for men',
            'price' => 900,
            'quantity' => 12,
            'category_id' => 2
        ]);

        Product::create([
            'name' => 'Classic Watch',
            'description' => 'Classic watch with leather strap',
            'price' => 1200,
            'quantity' => 8,
            'category_id' => 3
        ]);

        Product::create([
            'name' => 'Sport Watch',
            'description' => 'Modern sport watch for everyday use',
            'price' => 1500,
            'quantity' => 7,
            'category_id' => 3
        ]);

        Product::create([
            'name' => 'Black Bag',
            'description' => 'Simple black bag for daily use',
            'price' => 700,
            'quantity' => 10,
            'category_id' => 4
        ]);

        Product::create([
            'name' => 'Travel Bag',
            'description' => 'Large travel bag with useful space',
            'price' => 1000,
            'quantity' => 6,
            'category_id' => 4
        ]);

        Product::create([
            'name' => 'Black Belt',
            'description' => 'Classic black belt for men',
            'price' => 250,
            'quantity' => 20,
            'category_id' => 5
        ]);

        Product::create([
            'name' => 'Sunglasses',
            'description' => 'Stylish sunglasses for men',
            'price' => 400,
            'quantity' => 15,
            'category_id' => 5
        ]);
    }
}