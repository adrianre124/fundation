<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Practice>
 */
class PracticeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(),
            'description' => '<p>' . implode('</p><p>', $this->faker->paragraphs(3)) . '</p>',
            'thumbnail' => $this->faker->image('public/storage/thumbnails', 1200, 630, null, false),
            'duties' => '<li>' . implode('</li><li>', $this->faker->sentences(5)) . '</li>',
            'tools' => '<li>' . implode('</li><li>', $this->faker->sentences(6)) . '</li>',
        ];
    }
}
