<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'name',
        'description',
        'custom_message'
    ];

    public function productImages() : HasMany
    {
        return $this ->  hasMany(ProductImage::class, 'product_id', 'product');
    }

    public function measurement() : HasMany
    {
        return $this ->  hasMany(Measurement::class, 'measurement_id', 'measurement');
    }

    public function order(): HasMany
    {
        return $this->hasMany(Order::class, 'order_id');
    }
}
