<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    // use HasFactory;
    protected $table = 'users_data';
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone_num',
        'password',
        'password_confirmation',
        'roles'
    ];
}
