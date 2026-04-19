<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MKategori extends Model
{
    protected $table = 'm_kategori';

    protected $fillable = ['kategori_kode', 'kategori_nama'];

    public function barang()
    {
        return $this->hasMany(MBarang::class, 'kategori_id');
    }
}
