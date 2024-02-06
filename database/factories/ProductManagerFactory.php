<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductManager>
 */
class ProductManagerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'product_id' => fake()->unique()->randomNumber(5, true),
            'product_name' => fake()->word(),
            'product_sku' => fake()->unique()->regexify('[A-Z]{5}[0-4]{3}'),
            'product_category_id' => fake()->randomNumber(2, true),
            'product_category' => fake()->word(),
            'product_description' => fake()->sentence($nbWords = 6, $variableNbWords = true),
            'product_image' => 'https://source.unsplash.com/random',
            'author_id' => fake()->randomNumber(2, true)
        ];
    }
}
