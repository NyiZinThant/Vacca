<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class VaccineFormFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "name" => $this->faker->name,
            "email" => $this->faker->email,
            "age" => rand(16,90),
            "address" => $this->faker->address,
            "nrc" => $this->faker->uuid,
            "vaccine_id" => rand(1,3),
        ];
    }
}
