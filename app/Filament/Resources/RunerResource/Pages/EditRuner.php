<?php

namespace App\Filament\Resources\RunerResource\Pages;

use App\Filament\Resources\RunerResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRuner extends EditRecord
{
    protected static string $resource = RunerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
