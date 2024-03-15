<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => 1,
            'title' => $slug = $this->faker->sentence,
            'slug' => Str::slug($slug),
            'img' => $this->faker->imageUrl,
            'body' => $this->faker->paragraph,
            'status' => true,
        ];
    }
}
