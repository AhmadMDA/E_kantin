<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'role', 'username', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function customer()
    {
        return $this->hasOne(Customer::class);
    }
}