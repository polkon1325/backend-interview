<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CategoryManager>
 */
class CategoryManagerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'category_name' => fake()->unique()->word(),
            'category_description' => fake()->sentence($nbWords = 6, $variableNbWords = true),
            'product_manager' => fake()->name()
        ];
    }
}
