<?php

namespace Database\Factories;

use App\Models\Question;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dossier>
 */
class DossierFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(),
            'body' => fake()->paragraph(),
            'status' => 0,
            'author_id' => User::factory(),
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function ($dossier) {
            $questions = Question::factory()->count(5)->create();
            $dossier->questions()->saveMany($questions);
        });
    }
}
