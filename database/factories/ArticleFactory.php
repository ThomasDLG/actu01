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
            'title'   => fake()->realText(),
            'image'   => '/img/thumbnail.jpg',
            'content' => fake()->paragraph(20),
            'when'    => fake()->dateTimeInInterval('1 day', '+365 day')->format('Y-m-d H'),
            'categorie_id' =>fake()->randomNumber(1, 9),
            'user_id' =>fake()->randomNumber(1, 10)
        ];
    }
}