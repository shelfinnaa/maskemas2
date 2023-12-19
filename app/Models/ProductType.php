<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductType extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'code',
        'volume',
        'dimension',
        'pack_size',
        'product'
    ];

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'product', 'id');
    }
}
