<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Post;
use App\Models\Video;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $RandomBool = fake()->boolean;
        // dd($RandomBool);
        return [
            'body' => fake()->sentence,
            'commentable_id' => $RandomBool 
                ? Post::inRandomOrder()->first()->id
                : Video::inRandomOrder()->first()->id,
            'commentable_type' => $RandomBool
                ? 'App\Models\\Post'
                : 'App\Models\\Video'
        ];
    }
}
