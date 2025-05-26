<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         Product::factory(10)->create();

       /*  Product::factory()->create([
            'sku' => 'Test User',
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);*/
    }
}
