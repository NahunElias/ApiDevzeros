<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'=> rand(1,10),
            'author' => $this->faker->name,
            'title'=> $this->faker->sentence,
            'genre'=> $this->faker->sentence,
            'price'=> rand(1,50)            
        ];
    }
}
