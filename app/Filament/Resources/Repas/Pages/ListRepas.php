<?php

namespace App\Filament\Resources\Repas\Pages;

use App\Filament\Resources\Repas\RepasResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListRepas extends ListRecords
{
    protected static string $resource = RepasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
