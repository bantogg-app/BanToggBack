<?php

namespace App\Filament\Resources\Repas;

use App\Filament\Resources\Repas\Pages\CreateRepas;
use App\Filament\Resources\Repas\Pages\EditRepas;
use App\Filament\Resources\Repas\Pages\ListRepas;
use App\Filament\Resources\Repas\Schemas\RepasForm;
use App\Filament\Resources\Repas\Tables\RepasTable;
use App\Models\Repas;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class RepasResource extends Resource
{
    protected static ?string $model = Repas::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'nom';

    public static function form(Schema $schema): Schema
    {
        return RepasForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return RepasTable::configure($table);
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
            'index' => ListRepas::route('/'),
            'create' => CreateRepas::route('/create'),
            'edit' => EditRepas::route('/{record}/edit'),
        ];
    }
}
