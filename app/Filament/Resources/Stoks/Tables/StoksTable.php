<?php

namespace App\Filament\Resources\Stoks\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;

class StoksTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('barang.barang_nama')->label('Barang'),
                TextColumn::make('supplier.supplier_nama')->label('Supplier'),
                TextColumn::make('user.nama')->label('User'),
                TextColumn::make('stok_tanggal')->date(),

                TextColumn::make('stok_jumlah')
                    ->label('Jumlah')
                    ->color(fn($state) => $state >= 0 ? 'success' : 'danger'),
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
