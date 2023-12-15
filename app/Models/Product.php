<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'name',
        'description',
        'custom_message'
    ];

    public function productImages()
    {
        return $this ->  hasMany(ProductImage::class, 'product_id', 'id');
    }
}
