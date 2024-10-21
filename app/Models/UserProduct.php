<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProduct extends Model
{
    use SoftDeletes;

    protected $table = 'product';
    protected $fillable = [
        'product', 
        'photo', 
        'category_id',
        'price',
        'description',
    ];

    public function category(){
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}
