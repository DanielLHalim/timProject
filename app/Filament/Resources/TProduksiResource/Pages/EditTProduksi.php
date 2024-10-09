<?php

namespace App\Filament\Resources\TProduksiResource\Pages;

use App\Filament\Resources\TProduksiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTProduksi extends EditRecord
{
    protected static string $resource = TProduksiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
