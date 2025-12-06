<?php

namespace Database\Seeders;

use App\Models\Dossier;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DossierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Dossier::factory()->configure()->create();
    }
}
