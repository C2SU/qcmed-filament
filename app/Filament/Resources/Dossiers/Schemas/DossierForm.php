<?php

namespace App\Filament\Resources\Dossiers\Schemas;

use App\Filament\Resources\Questions\QuestionResource;
use App\Filament\Resources\Questions\Schemas\QuestionForm;
use Filament\Forms\Components\Repeater;
use Filament\Schemas\Components\Form;
use Filament\Schemas\Schema;

class DossierForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Repeater::make("Questions")
                ->schema(QuestionForm::schemaArray())
                ->columnSpanFull(),
            ]);
    }
}
