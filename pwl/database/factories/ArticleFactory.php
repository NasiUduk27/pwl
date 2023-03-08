<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'author' => $this->faker->name,
            'content' => $this->faker->paragraph,
            'genre' => $this->faker->randomElement(['Horror', 'Comedy', 'Romance', 'Action', 'Drama']),
            'rating' => $this->faker->numberBetween(1, 5),
        ];
    }
}
