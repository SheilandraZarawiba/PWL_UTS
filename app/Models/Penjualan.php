<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    protected $table = 't_penjualan';

    protected $fillable = [
        'user_id',
        'pembeli',
        'penjualan_kode',
        'penjualan_tanggal'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function detailPenjualan()
    {
        return $this->hasMany(\App\Models\PenjualanDetail::class, 'penjualan_id');
    }
}
