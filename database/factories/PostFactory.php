<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'body' => $this->faker->text,
            'image' => $this->faker->imageUrl(width: 480, height: 320, category: 'post', randomize: true, word: 'post', format: 'jpg'),
            'user_id' => User::where('name', 'Admin')->first()->id,
            'category_id' => Category::factory(),
        ];
    }
}
