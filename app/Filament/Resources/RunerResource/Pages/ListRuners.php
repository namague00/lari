<?php

namespace App\Filament\Resources\RunerResource\Pages;

use App\Filament\Resources\RunerResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRuners extends ListRecords
{
    protected static string $resource = RunerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
