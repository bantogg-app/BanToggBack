<?php

namespace App\Filament\Resources\Repas\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class RepasForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nom')
                    ->required(),
                TextInput::make('photo')
                    ->required(),
                TextInput::make('ingredients')
                    ->required(),
                TextInput::make('lien_video')
                    ->required(),
                TextInput::make('categorie')
                    ->required(),
                TextInput::make('type_repas')
                    ->required(),
            ]);
    }
}
