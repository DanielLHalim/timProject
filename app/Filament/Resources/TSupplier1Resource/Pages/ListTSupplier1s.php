<?php

namespace App\Filament\Resources\TSupplier1Resource\Pages;

use App\Filament\Resources\TSupplier1Resource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTSupplier1s extends ListRecords
{
    protected static string $resource = TSupplier1Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
