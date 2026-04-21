<?php

namespace App\Filament\Resources\PenjualanDetails\Pages;

use App\Filament\Resources\PenjualanDetails\PenjualanDetailResource;
use App\Models\Stok;
use Exception;
use Filament\Resources\Pages\CreateRecord;

class CreatePenjualanDetail extends CreateRecord
{
    protected static string $resource = PenjualanDetailResource::class;

    protected function afterCreate(): void
    {
        $stok = Stok::where('barang_id', $this->record->barang_id)->first();

        if (!$stok) {
            throw new Exception('Stok tidak ditemukan');
        }

        if ($this->record->jumlah > $stok->stok_jumlah) {
            throw new Exception('Stok tidak cukup');
        }

        $stok->stok_jumlah -= $this->record->jumlah;
        $stok->save();
    }
}
