<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\UserData;

class Userprofile extends Model
{
    protected $table = 'userprofile';
    protected $fillable = [
        'address_one',
        'zip_code',
        'gender',
        'provinces',
        'city',
        'country',
        
    ];

    public function userdata(){
        return $this->hasOne(UserData::class,'id','user_data_id');
    }
}
