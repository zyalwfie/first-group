<?php

namespace Database\Factories;

use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

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
            'image' => 'https://random-image-pepebigotes.vercel.app/api/random-image',
            'title' => fake()->sentence(6),
            'author_id' => User::factory(),
            'tag_id' => Tag::factory(),
            'content' => fake()->text(),
            'time' => rand(1, 30),
        ];
    }
}
