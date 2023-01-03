<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Announcement>
 */
class AnnouncementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'header' => fake()->name(),
            'sub_header' => fake()->name(),
            'image' => fake()->randomElement($array = array ('image.jpg','image.png', "image.ivg")),
            'description' => fake()->realText($maxNbChars = 50, $indexSize = 2),
            'user_id' => User::class
        ];
    }
}
