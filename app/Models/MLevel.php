<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MLevel extends Model
{
    protected $table = 'm_level';

    protected $fillable = ['level_kode', 'level_nama'];

    public function user()
    {
        return $this->hasMany(MUser::class, 'level_id');
    }
}
