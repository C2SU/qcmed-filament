<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChapitresParMatiereSeeder extends Seeder
{
    public function run(): void
    {
        $relations = [
            // Exemple : ['matiere_id' => 1, 'chapitre_id' => 10],
            // Remplir avec les vraies correspondances du fichier SQL
        ];

        foreach ($relations as $relation) {
            DB::table('chapitres_par_matiere')->insert($relation);
        }
    }
}
