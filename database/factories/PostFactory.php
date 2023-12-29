<?php

namespace Database\Factories;

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
    public function definition()
    {
        return [

            'category_id' => mt_rand(1,3),
            'user_id' => mt_rand(1,3),
            'title' => fake()->unique()->sentence(mt_rand(2,8)),
            'slug' => fake()->slug(),
            'excerpt' => fake()->paragraph(),
            'body' => collect(fake()->paragraphs(mt_rand(6,10)))
                        ->map(fn($p) => "<p>$p</p>")
                        ->implode(''),
                        

            
            

            //
        ];
    }
}
