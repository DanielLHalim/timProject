<?php

namespace App\Filament\Resources\Supplier1Resource\Pages;

use App\Filament\Resources\Supplier1Resource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSupplier1 extends EditRecord
{
    protected static string $resource = Supplier1Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
