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
            'name' => fake()->name(),
            'price'=> fake()->numberBetween(0, 100),
            'weight'=>fake()->numberBetween(0, 100),
            'material'=>fake()->text(45),
            'description'=>fake()->text(250),
            'image_url'=>fake()->text(250),
            'stock'=>fake()->numberBetween(0, 50),
            'category'=>fake()->text(50),
        ];
    }
}
