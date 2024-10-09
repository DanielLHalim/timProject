<?php

namespace App\Filament\Resources\Supplier1Resource\Pages;

use App\Filament\Resources\Supplier1Resource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSupplier1s extends ListRecords
{
    protected static string $resource = Supplier1Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
