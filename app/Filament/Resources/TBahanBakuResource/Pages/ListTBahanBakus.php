<?php

namespace App\Filament\Resources\TBahanBakuResource\Pages;

use App\Filament\Resources\TBahanBakuResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTBahanBakus extends ListRecords
{
    protected static string $resource = TBahanBakuResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
