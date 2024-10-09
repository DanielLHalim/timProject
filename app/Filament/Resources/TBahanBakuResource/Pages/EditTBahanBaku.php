<?php

namespace App\Filament\Resources\TBahanBakuResource\Pages;

use App\Filament\Resources\TBahanBakuResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTBahanBaku extends EditRecord
{
    protected static string $resource = TBahanBakuResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
