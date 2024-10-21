<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;
    //use HasFactory;
    protected $table = '_category';
    protected $fillable = [
        'category', 
        'photo', 
        'slug'
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
