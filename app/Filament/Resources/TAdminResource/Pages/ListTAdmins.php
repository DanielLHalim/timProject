<?php

namespace App\Filament\Resources\TAdminResource\Pages;

use App\Filament\Resources\TAdminResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTAdmins extends ListRecords
{
    protected static string $resource = TAdminResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
