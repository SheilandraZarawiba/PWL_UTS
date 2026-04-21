<?php

namespace App\Filament\Resources\Barangs\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;

class BarangForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            Select::make('kategori_id')
                ->relationship('kategori', 'kategori_nama')
                ->label('Kategori')
                ->required(),

            TextInput::make('barang_kode')
                ->label('Kode Barang')
                ->required(),

            TextInput::make('barang_nama')
                ->label('Nama Barang')
                ->required(),

            TextInput::make('harga_beli')
                ->label('Harga Beli')
                ->required(),

            TextInput::make('harga_jual')
                ->label('Harga Jual')
                ->required(),
        ]);
    }
}
