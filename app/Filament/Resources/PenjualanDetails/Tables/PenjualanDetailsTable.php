<?php

namespace App\Filament\Resources\PenjualanDetails\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;

class PenjualanDetailsTable
{
    public static function configure(Table $table): Table
    {
        return $table->columns([
            TextColumn::make('penjualan.penjualan_kode')->label('Kode'),
            TextColumn::make('barang.barang_nama')->label('Barang'),
            TextColumn::make('harga'),
            TextColumn::make('jumlah'),
            TextColumn::make('subtotal')
                ->getStateUsing(fn($record) => $record->harga * $record->jumlah),
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
