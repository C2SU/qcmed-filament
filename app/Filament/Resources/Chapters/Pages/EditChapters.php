<?php

namespace App\Filament\Resources\Chapters\Pages;

use App\Filament\Resources\Chapters\ChaptersResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Resources\Pages\EditRecord;

class EditChapters extends EditRecord
{
    protected static string $resource = ChaptersResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
            ForceDeleteAction::make(),
            RestoreAction::make(),
        ];
    }
}
