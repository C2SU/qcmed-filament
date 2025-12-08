<?php

namespace Database\Seeders;

use App\Models\LearningObjective;
use Illuminate\Database\Seeder;

class LearningObjectivesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        LearningObjective::factory()->count(10)->create();
    }
}
