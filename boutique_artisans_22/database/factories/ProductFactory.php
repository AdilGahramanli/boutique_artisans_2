<?php

namespace Database\Factories;

use App\Models\Shop;
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
        // This method defines the default state of the Product model.
        return [
            'name' => fake()->name(),
            // 'price' attribute will be filled with a random number between 0 and 100.
            'price'=> fake()->numberBetween(0, 100),
            'weight'=>fake()->numberBetween(0, 100),
            'material'=>fake()->text(45),
            'description'=>fake()->text(250),
            // 'image_url' attribute will be filled with fake text of maximum 250 characters.
            'image_url'=>fake()->text(250),
            'stock'=>fake()->numberBetween(0, 50),
            'category'=>fake()->text(50),
            'shop_id' => Shop::factory()
        ];
    }
}
