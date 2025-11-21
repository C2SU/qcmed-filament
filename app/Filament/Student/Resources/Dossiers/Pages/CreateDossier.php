<?php

namespace App\Filament\Student\Resources\Dossiers\Pages;

use App\Filament\Student\Resources\Dossiers\DossierResource;
use Filament\Resources\Pages\CreateRecord;

class CreateDossier extends CreateRecord
{
    protected static string $resource = DossierResource::class;
}
