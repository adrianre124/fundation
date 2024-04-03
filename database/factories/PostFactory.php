<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;

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
            'category_id' => function () {
                if ($category = Category::inRandomOrder()->first()) {
                    return $category->id;
                }
            },
            'title' => $this->faker->sentence(),
            'body' => '<p>' . implode('</p><p>', $this->faker->paragraphs(5)) . '</p>',
        ];
    }
}
