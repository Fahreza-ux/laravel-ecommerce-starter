<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Create categories
        $categories = [
            ['name' => 'Electronics', 'slug' => 'electronics'],
            ['name' => 'Fashion', 'slug' => 'fashion'],
            ['name' => 'Home & Garden', 'slug' => 'home-garden'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }

        // Create sample products
        $products = [
            [
                'name' => 'Smartphone XYZ',
                'description' => 'High-quality smartphone with great camera',
                'price' => 2999000,
                'stock' => 50,
                'category_id' => 1,
            ],
            [
                'name' => 'Laptop ABC', 
                'description' => 'Powerful laptop for work and gaming',
                'price' => 8999000,
                'stock' => 25,
                'category_id' => 1,
            ],
            // Add more sample products...
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
