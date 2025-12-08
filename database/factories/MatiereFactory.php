<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MatiereFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->word(),
            'description' => $this->faker->sentence(),
        ];
    }
}
