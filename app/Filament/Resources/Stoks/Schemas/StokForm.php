<?php

namespace App\Filament\Resources\Stoks\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;

class StokForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('barang_id')
                    ->relationship('barang', 'barang_nama')
                    ->label('Barang')
                    ->required(),

                Select::make('supplier_id')
                    ->relationship('supplier', 'supplier_nama')
                    ->label('Supplier')
                    ->required(),

                Select::make('user_id')
                    ->relationship('user', 'nama')
                    ->label('User')
                    ->required(),

                DatePicker::make('stok_tanggal')
                    ->required(),

                TextInput::make('stok_jumlah')
                    ->numeric()
                    ->label('Jumlah Stok (+ masuk / - keluar)')
                    ->required(),
            ]);
    }
}
