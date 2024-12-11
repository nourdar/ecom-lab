<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the model that is associated with this factory.
     *
     * @var string
     */
    protected $model = \App\Models\Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'name' => $this->faker->words(3, true), // Generates a three-word product name
            'description' => $this->faker->sentence(), // Generates a random description
            'price' => $this->faker->randomFloat(2, 10, 200), // Random price between 10 and 200
            'stock' => $this->faker->numberBetween(0, 500), // Random stock quantity
            'category_id' => \App\Models\Category::factory(), // Creates a related category
            'image_url' => 'https://via.placeholder.com/640x480.png', // Fake product image URL
        ];
    }
}
