<?php

namespace Database\Factories;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Supplier;
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
            'name' => $this->faker->productName,
            'slug' => $this->faker->unique()->slug,
            'description' => $this->faker->paragraph,
            'price' => $this->faker->randomFloat(2, 10, 100000),
            'discount' => $this->faker->randomFloat(2, 0, 100),
            'tax' => $this->faker->randomFloat(2, 0, 20),
            'stock_status' => $this->faker->randomElement(['in_stock', 'out_of_stock']),
            'quantity' => $this->faker->numberBetween(0, 500),
            'featured' => $this->faker->boolean(10),
            'image' => $this->faker->imageUrl(640, 480, 'products', true),
            'gallery' => json_encode([$this->faker->imageUrl(), $this->faker->imageUrl()]),
            'tags' => json_encode([$this->faker->word, $this->faker->word]),
            'category_id' => Category::inRandomOrder()->first()->id ?? Category::factory(),
            'brand_id' => Brand::inRandomOrder()->first()->id ?? Brand::factory(),
            'supplier_id' => Supplier::inRandomOrder()->first()->id ?? Supplier::factory(),
        ];
    }
}
