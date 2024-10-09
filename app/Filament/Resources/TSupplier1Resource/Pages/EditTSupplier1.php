<?php

namespace App\Filament\Resources\TSupplier1Resource\Pages;

use App\Filament\Resources\TSupplier1Resource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTSupplier1 extends EditRecord
{
    protected static string $resource = TSupplier1Resource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
