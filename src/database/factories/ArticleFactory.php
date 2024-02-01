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
    public function definition(): array
    {
        return [
            'slug' => fake()->slug,
            'title' => fake()->title,
            'description' => fake()->text(65),
            'text' => fake()->realText(1000),
            'likes_count' => fake()->numberBetween(0, 1000),
            'views_count' => fake()->numberBetween(0, 1000),
        ];
    }
}
