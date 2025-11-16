<?php

namespace App\Filament\Resources\Attempts\Pages;

use App\Filament\Resources\Attempts\AttemptResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListAttempts extends ListRecords
{
    protected static string $resource = AttemptResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
