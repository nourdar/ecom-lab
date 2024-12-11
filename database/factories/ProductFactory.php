<?php

namespace Database\Factories;

use App\Models\Product; // Ensure Product model is imported
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    // Define the model this factory is for
    protected $model = Product::class;

protected $model = Product::class;

public function definition()
{
    return [
        'name' => $this->faker->word(),
        'price' => $this->faker->randomFloat(2, 10, 200),
        'brand_id' => \App\Models\Brand::factory()->create()->id,
    ];
}
    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'price' => $this->faker->randomFloat(2, 10, 200), // Random price between 10 and 200
            'brand_id' => \App\Models\Brand::inRandomOrder()->first()->id, // Random brand from the brands table
        ];
    }
}
