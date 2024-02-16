<?php

namespace Database\Factories;

use App\Models\user;
use App\Models\Category;
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
            'content' => $this->faker->paragraph,
            'id_category' => Category::all()->random()->id_category,
            'id_user' => user::all()->random()->id_user,
            'name_image' => 'public/pictures/logo.png'
        ];
    }
}
