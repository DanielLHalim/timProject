<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TProduksiResource\Pages;
use App\Filament\Resources\TProduksiResource\RelationManagers;
use App\Models\TProduksi;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TProduksiResource extends Resource
{
    protected static ?string $model = TProduksi::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('kodeBarang')
                ->label('Kode Barang')
                ->maxLength(12)
                ->required(),

                Forms\Components\TextInput::make('namaBarang')
                ->label('Nama Barang')
                ->maxLength(32)
                ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('kodeBarang')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('namaBarang')->sortable()->searchable(),
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
            'index' => Pages\ListTProduksis::route('/'),
            'create' => Pages\CreateTProduksi::route('/create'),
            'edit' => Pages\EditTProduksi::route('/{record}/edit'),
        ];
    }
}
