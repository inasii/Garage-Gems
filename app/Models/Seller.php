<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    // use HasFactory;
    protected $table = 'seller_data';
    protected $fillable = [
        'store_name',
        'store_description',
        'store_phone',
        'address',
    ];

    public function user(){
        return $this->belongsTo(UserData::class, 'user_id', 'id');
    }
}
