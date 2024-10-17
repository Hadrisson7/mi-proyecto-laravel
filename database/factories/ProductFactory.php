<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(),
            'image' => 'products/' . $this->faker->image('public/storage/products', 640, 480, null, false),
            'cost_price' => $this->faker->randomFloat(2, 0, 1000),
            'sale_price' => $this->faker->randomFloat(2, 0, 1000),
            'stock' => $this->faker->numberBetween(0, 1000),
        ];
    }
}
