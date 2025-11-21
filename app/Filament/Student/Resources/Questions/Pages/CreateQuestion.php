<?php

namespace App\Filament\Student\Resources\Questions\Pages;

use App\Filament\Student\Resources\Questions\QuestionResource;
use Filament\Resources\Pages\CreateRecord;

class CreateQuestion extends CreateRecord
{
    protected static string $resource = QuestionResource::class;
}
