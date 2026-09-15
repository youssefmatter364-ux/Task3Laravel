<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        Category::create([
            'name' => 'Clothes',
            'description' => 'All clothes products'
        ]);

        Category::create([
            'name' => 'Shoes',
            'description' => 'All shoes products'
        ]);

        Category::create([
            'name' => 'Watches',
            'description' => 'All watches products'
        ]);

        Category::create([
            'name' => 'Bags',
            'description' => 'All bags products'
        ]);

        Category::create([
            'name' => 'Accessories',
            'description' => 'All accessories products'
        ]);
    }
}