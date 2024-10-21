<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class UserData extends Authenticatable
{
    use Notifiable;

    protected $table = 'users_data';
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone_num',
        'password',
        'password_confirmation',
        'role',
        'city',
        'district',
        'postal_code',
        'street_name',
        'building',
        'house_number',
    ];

    protected $attributes = [
        'role' => 'user',
    ];

    public function thisAdmin()
    {
        return $this->role === 'admin';
    }
}
