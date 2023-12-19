<?php

namespace App\Models;

use App\Models\ProductType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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

    public function productType(): HasMany
{
    return $this->hasMany(ProductType::class, 'product', 'id');
}

    public function order(): HasMany
    {
        return $this->hasMany(Order::class, 'order_id');
    }
}
