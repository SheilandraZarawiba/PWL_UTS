<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MUser extends Model
{
    protected $table = 'm_user';

    protected $fillable = ['level_id', 'username', 'nama', 'password'];

    public function level()
    {
        return $this->belongsTo(MLevel::class, 'level_id');
    }
}
