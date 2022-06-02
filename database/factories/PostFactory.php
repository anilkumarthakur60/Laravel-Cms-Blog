<?php

namespace Database\Factories;

use App\Category;
use App\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $users = collect(User::all()->modelKeys());
        $categories = collect(Category::all()->modelKeys());

        return [
            'title' => $this->faker->unique()->name(),
            'description' => $this->faker->name(),
            'content' => $this->faker->name(),
            'image' => 'https://via.placeholder.com/150',
            'published_at' => now(),
            'category_id' => Category::factory(),
            'user_id' => User::factory(),
        ];
    }
}
