<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'm_user';

    protected $fillable = [
        'level_id',
        'username',
        'email',
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

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }


    public function level()
    {
        return $this->belongsTo(Level::class, 'level_id');
    }
}
