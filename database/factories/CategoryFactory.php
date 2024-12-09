<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->unique()->word,
            'slug' => $this->faker->unique()->slug,
            'description' => $this->faker->sentence,
            'image' => $this->faker->imageUrl(640, 480, 'categories', true),
            'parent_id' => null, // افتراضيًا تصنيف رئيسي
            'is_active' => $this->faker->boolean(90),
        ];
    }
}
