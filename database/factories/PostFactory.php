<?php

namespace Database\Factories;

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
        return [
            'title' => $this->faker->sentence(mt_rand(3, 6)),
            'slug' => $this->faker->slug(),
            'excerpt' => $this->faker->paragraph(),
            // 'body' => '<p>' . implode('</p><p>'$this->faker->paragraphs(mt_rand(2, 8))). '</p>',

            // 'body' => collect($this->faker->paragraphs(mt_rand(2, 8)))
            //             ->map(function(p){
            //                 return "<p>$p</p>";
            //             }),

            'body' => collect($this->faker->paragraphs(mt_rand(2, 8)))
                        ->map(fn($p) => "<p>$p</p>")->implode(''),

            'user_id' => mt_rand(1,2),
            'category_id' => mt_rand(1,5)
        ];
    }
}
