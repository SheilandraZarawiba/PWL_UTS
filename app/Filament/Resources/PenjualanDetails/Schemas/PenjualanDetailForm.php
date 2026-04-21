<?php

namespace App\Filament\Resources\PenjualanDetails\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;

class PenjualanDetailForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('penjualan_id')
                    ->relationship('penjualan', 'penjualan_kode')
                    ->label('Kode Penjualan')
                    ->required(),

                Select::make('barang_id')
                    ->relationship('barang', 'barang_nama')
                    ->reactive()
                    ->afterStateUpdated(function ($state, callable $set) {
                        $barang = \App\Models\Barang::find($state);
                        if ($barang) {
                            $set('harga', $barang->harga_jual);
                        }
                    })
                    ->required(),

                TextInput::make('harga')
                    ->numeric()
                    ->readOnly()
                    ->required(),

                TextInput::make('jumlah')
                    ->numeric()
                    ->required(),
            ]);
    }
}
