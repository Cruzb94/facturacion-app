<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'description' => Str::random(50),
            'price' => $this->faker->numberBetween($min = 10, $max = 1000),
            'tax' => $this->faker->numberBetween($min = 1, $max = 20),
            'image' => $this->faker->imageUrl(),
        ];
    }
}
