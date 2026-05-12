<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                
                'img' => 'https://example.com/product1.jpg',
                'brand' => 'Brand A',
                'title' => 'Product 1 Title',
                'rating' => 4.5,
                'reviews' => 100,
                'sellPrice' => 4999,
                'orders' => '500',
                'discount' => 10,
                'category' => 'Shoes',
                'mrp' => 5999,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                
                'img' => 'https://example.com/product2.jpg',
                'brand' => 'Brand B',
                'title' => 'Product 2 Title',
                'rating' => 4.5,
                'reviews' => 100,
                'sellPrice' => 4999,
                'orders' => '500',
                'discount' => 10,
                'category' => 'Shoes',
                'mrp' => 5999,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                 
                'img' => 'https://example.com/product3.jpg',
                'brand' => 'Brand C',
                'title' => 'Product 3 Title',
                'rating' => 4.5,
                'reviews' => 100,
                'sellPrice' => 4999,
                'orders' => '500',
                'discount' => 10,
                'category' => 'Shoes',
                'mrp' => 5999,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
