<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Brand>
 */
class BrandFactory extends Factory
{
    protected $model = \App\Models\Brand::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->unique()->company,
            'slug' => $this->faker->unique()->slug,
            'description' => $this->faker->paragraph,
            'logo' => $this->faker->imageUrl(200, 200, 'business'),
            'is_active' => $this->faker->boolean,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
