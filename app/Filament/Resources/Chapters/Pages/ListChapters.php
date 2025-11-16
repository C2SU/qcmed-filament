<?php

namespace App\Filament\Resources\Chapters\Pages;

use App\Filament\Resources\Chapters\ChaptersResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListChapters extends ListRecords
{
    protected static string $resource = ChaptersResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
