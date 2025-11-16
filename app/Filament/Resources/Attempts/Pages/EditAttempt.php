<?php

namespace App\Filament\Resources\Attempts\Pages;

use App\Filament\Resources\Attempts\AttemptResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Resources\Pages\EditRecord;

class EditAttempt extends EditRecord
{
    protected static string $resource = AttemptResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
            ForceDeleteAction::make(),
            RestoreAction::make(),
        ];
    }
}
