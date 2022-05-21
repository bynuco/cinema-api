<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class CinemaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->colorName . " Sineması",
            'city_id' => rand(1,5)
        ];
    }
}
