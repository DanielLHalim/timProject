<?php

namespace App\Filament\Resources\TProduksiResource\Pages;

use App\Filament\Resources\TProduksiResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTProduksis extends ListRecords
{
    protected static string $resource = TProduksiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
