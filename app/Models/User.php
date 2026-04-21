<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'm_user';

    protected $fillable = [
        'level_id',
        'username',
        'nama',
        'password'
    ];

    protected $hidden = [
        'password',
    ];

    public function getNameAttribute(): string
    {
        return $this->nama ?? '';
    }

    public function level()
    {
        return $this->belongsTo(Level::class, 'level_id');
    }
}
