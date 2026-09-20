<?php

namespace App\Filament\Resources\Repas\Pages;

use App\Filament\Resources\Repas\RepasResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditRepas extends EditRecord
{
    protected static string $resource = RepasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
