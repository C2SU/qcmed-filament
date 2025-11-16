<?php

namespace App\Filament\Resources\Dossiers\Pages;

use App\Filament\Resources\Dossiers\DossierResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListDossiers extends ListRecords
{
    protected static string $resource = DossierResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
