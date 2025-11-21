<?php

namespace App\Filament\Student\Resources\Dossiers\Pages;

use App\Filament\Student\Resources\Dossiers\DossierResource;
use Filament\Resources\Pages\ListRecords;

class ListDossiers extends ListRecords
{
    protected static string $resource = DossierResource::class;
}
