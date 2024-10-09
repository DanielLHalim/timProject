<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TSupplier1Resource\Pages;
use App\Filament\Resources\TSupplier1Resource\RelationManagers;
use App\Models\TSupplier1;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TSupplier1Resource extends Resource
{
    protected static ?string $model = TSupplier1::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('kodeSupplier')
                ->label('Kode Supplier')
                ->maxLength(12)
                ->required(),

                Forms\Components\TextInput::make('namaSupplier')
                ->label('Nama Supplier')
                ->maxLength(40)
                ->required(),

                Forms\Components\TextInput::make('noHPSupplier')
                ->label('Nomor HP Supplier')
                ->maxLength(15)
                ->required(),

                Forms\Components\TextInput::make('alamatSupplier')
                ->label('Alamat Supplier')
                ->maxLength(32)
                ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('kodeSupplier')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('namaSupplier')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('noHPSupplier')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('alamatSupplier')->sortable()->searchable(),
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
            'index' => Pages\ListTSupplier1s::route('/'),
            'create' => Pages\CreateTSupplier1::route('/create'),
            'edit' => Pages\EditTSupplier1::route('/{record}/edit'),
        ];
    }
}
