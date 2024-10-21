<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    // use HasFactory;
    protected $table = 'checkout';
    protected $fillable = [
        'user_id',
        'name_on_card',
        'credit_card_number',
        'exp_month',
        'exp_year',
        'cvv',
    ];

    public function user(){
        return $this->belongsTo(UserData::class, 'user_id', 'id');
    }
}
