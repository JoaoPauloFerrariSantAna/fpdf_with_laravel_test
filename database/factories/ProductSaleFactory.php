<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Sale;
use App\Models\Worker;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductSale>
 */
class ProductSaleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "product_id" => $this->faker->numberBetween(1, Product::max("id")),
            "sale_id" => $this->faker->numberBetween(1, Sale::max("id")),
            "worker_id" => $this->faker->numberBetween(1, Worker::max("id"))
        ];
    }
}
