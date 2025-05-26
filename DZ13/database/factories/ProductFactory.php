<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Product;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
     protected $model = Product::class;

    /**
     * Определение состояния модели по умолчанию.
     * @return array
     */
    public function definition(): array {
        return [
            'sku' => $this->faker->name,
            'name' => $this->faker->name,
            'price' => $this->faker->numberBetween($min = 1500, $max = 6000),
        ];
    }
}
