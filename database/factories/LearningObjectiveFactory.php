<?php

namespace Database\Factories;

use App\Models\Chapter;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\LearningObjective>
 */
class LearningObjectiveFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'chapter_numero' => Chapter::exists()? Chapter::inRandomOrder()->first()->numero: Chapter::factory(),
            'rang' => fake()->randomElement(["A","B"]),
            'rubrique' => fake()->randomElement(["Définition", "Prise en charge", "Epidémiologie", "Physiopathologie", "Diagnostic positif"]),
            'intitule' => $this->faker->sentence(),
        ];
    }
}
