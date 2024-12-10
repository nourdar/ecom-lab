<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * The name of the model that is associated with this factory.
     *
     * @var string
     */
    protected $model = \App\Models\Category::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(), // Generates a random word
            'description' => $this->faker->sentence(), // Generates a random sentence
        ];
    }
}
