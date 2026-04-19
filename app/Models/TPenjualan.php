<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TPenjualan extends Model
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
        return $this->belongsTo(MUser::class, 'user_id');
    }

    public function detail()
    {
        return $this->hasMany(TPenjualanDetail::class, 'penjualan_id');
    }
}
