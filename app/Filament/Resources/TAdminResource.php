<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TAdminResource\Pages;
use App\Filament\Resources\TAdminResource\RelationManagers;
use App\Models\TAdmin;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TAdminResource extends Resource
{
    protected static ?string $model = TAdmin::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama')
                ->label('Nama')
                ->maxLength(32)
                ->required(),

                Forms\Components\TextInput::make('noHP')
                ->label('Nomor HP')
                ->maxLength(15)
                ->required(),

                Forms\Components\TextInput::make('email')
                ->label('Email')
                ->maxLength(64)
                ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('noHP')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('email')->sortable()->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTAdmins::route('/'),
            'create' => Pages\CreateTAdmin::route('/create'),
            'edit' => Pages\EditTAdmin::route('/{record}/edit'),
        ];
    }
}
