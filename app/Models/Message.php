<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    // Specify the table name (optional if your table name is 'messages')
    protected $table = 'messages';

    // Define the fillable properties
    protected $fillable = [
        'full_name',
        'email',
        'message',
    ];
}
