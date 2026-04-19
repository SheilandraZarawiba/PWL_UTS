<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TStok extends Model
{
    protected $table = 't_stok';

    protected $fillable = [
        'supplier_id',
        'barang_id',
        'user_id',
        'stok_tanggal',
        'stok_jumlah'
    ];
}
