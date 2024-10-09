<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TBahanBakuResource\Pages;
use App\Filament\Resources\TBahanBakuResource\RelationManagers;
use App\Models\TBahanBaku;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TBahanBakuResource extends Resource
{
    protected static ?string $model = TBahanBaku::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('kodeBahanBaku')
                ->label('Kode Bahan Baku')
                ->maxLength(12)
                ->required(),

                Forms\Components\Select::make('jenisBahanBaku')
                ->options([
                    "Plastik" => "Plastik",
                    "Besi" => "Besi",
                    "Aluminium" => "Aluminium",
                    "Kertas" => "Kertas",
                ])
                ->searchable()
                ->native(false),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('kodeBahanBaku')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('jenisBahanBaku')->sortable()->searchable(),
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
            'index' => Pages\ListTBahanBakus::route('/'),
            'create' => Pages\CreateTBahanBaku::route('/create'),
            'edit' => Pages\EditTBahanBaku::route('/{record}/edit'),
        ];
    }
}
