<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        // package fakerphp-picsum-images
        $faker = \Faker\Factory::create();
        $faker->addProvider(new \Smknstd\FakerPicsumImages\FakerPicsumImagesProvider($faker));
        
        return [
            'name' => fake()->name(),
            'img' => $faker->imageUrl('500', '500'),
            'price' => fake()->numberBetween(20,500),
            'size' => fake()->numberBetween(80,148)
        ];
    }
}
