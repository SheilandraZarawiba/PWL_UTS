<?php

namespace App\Filament\Resources\Penjualans\Pages;

use App\Filament\Resources\Penjualans\PenjualanResource;
use Illuminate\Support\Facades\Auth;
use Filament\Resources\Pages\CreateRecord;
use App\Models\Stok;

class CreatePenjualan extends CreateRecord
{
    protected static string $resource = PenjualanResource::class;

    protected function afterCreate(): void
    {
        $details = $this->record->detailPenjualan()->get();

        if ($details->isEmpty()) return;

        foreach ($details as $detail) {
            Stok::create([
                'barang_id' => $detail->barang_id,
                'supplier_id' => 1,
                'user_id' => Auth::id(),
                'stok_tanggal' => now(),
                'stok_jumlah' => -$detail->jumlah,
            ]);
        }
    }
}
