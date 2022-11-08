<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TweetFactory extends Factory
{
    public function definition()
    {
        return [
            "content" => $this->faker->realText(100),
        ];
    }
}
