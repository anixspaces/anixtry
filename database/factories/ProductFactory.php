<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends Factory<Product>
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
        $name = fake()->unique()->words(2,true);

        return [
            'category_id' => Category::factory(),
            'name' => $name,
            'slug' => Str::slug($name),
            'description' => fake()->paragraph(),
            'price' => fake()->numberBetween(500,5000),
            'color' => fake()->safeColorName(),
            'color_code' => fake()->hexColor(),
            'finish' => 'Gloss',
            'coverage' => '120 sq.ft',
            'drying_time' => '4 Hours',
            'image' => 'products/default.jpg',
            'featured' => rand(0,1),
            'status' => true
        ];
    }
}
