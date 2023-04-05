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
            //
            'name' => $this->faker->sentence,
            'category' => $this->faker->sentence,
            'client' => $this->faker->sentence,
            'pro_date' => now(),
            'pro_url' => $this->faker->sentence,
            'created_at' => now()
        ];
    }
}
