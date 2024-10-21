<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;
    // use HasFactory;
    protected $table = 'product';
    protected $fillable = [
        'product', 
        'photo', 
        'category_id',
        'price',
        'description',
    ];

    // public function galery(){
    //     return $this->hasMany(ProductGalery::class, 'product_id', 'id');
    // }

    // public function user(){
    //     return $this->hasOne(UserData::class, 'id', 'user_id');
    // }

    public function category(){
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}
