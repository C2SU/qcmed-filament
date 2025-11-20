<?php

namespace Database\Seeders;

use App\Models\Chapter;
use Illuminate\Database\Seeder;

class ChaptersSeederComplete extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tsvPath = 'C:\\Users\\User\\Downloads\\Nouveau_programme_R2C.xlsx - Table 1 (3).tsv';
        
        if (!file_exists($tsvPath)) {
            $this->command->error('Fichier TSV introuvable : ' . $tsvPath);
            return;
        }
        
        $content = file_get_contents($tsvPath);
        $lines = explode("\n", trim($content));
        
        $imported = 0;
        foreach ($lines as $line) {
            $parts = explode("\t", $line);
            
            // Skip empty lines or lines without 2 columns
            if (count($parts) !== 2) {
                continue;
            }
            
            $numero = trim($parts[0]);
            $description = trim($parts[1]);
            
            // Skip if numero is empty
            if (empty($numero)) {
                continue;
            }
            
            Chapter::create([
                'numero' => $numero,
                'description' => $description,
            ]);
            
            $imported++;
        }
        
        $this->command->info('✅ ' . $imported . ' chapitres importés avec succès !');
    }
}
