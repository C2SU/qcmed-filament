<?php

namespace App\Filament\Resources\Attempts;

use App\Filament\Resources\Attempts\Pages\CreateAttempt;
use App\Filament\Resources\Attempts\Pages\EditAttempt;
use App\Filament\Resources\Attempts\Pages\ListAttempts;
use App\Filament\Resources\Attempts\Schemas\AttemptForm;
use App\Filament\Resources\Attempts\Tables\AttemptsTable;
use App\Models\Attempt;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AttemptResource extends Resource
{
    protected static ?string $model = Attempt::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Attempt';

    public static function form(Schema $schema): Schema
    {
        return AttemptForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return AttemptsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListAttempts::route('/'),
            'create' => CreateAttempt::route('/create'),
            'edit' => EditAttempt::route('/{record}/edit'),
        ];
    }

    public static function getRecordRouteBindingEloquentQuery(): Builder
    {
        return parent::getRecordRouteBindingEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
