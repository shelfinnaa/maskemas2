<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'tracking_id',
        'contact_info',
        'total_price',
        'quantity',
        'estimated_arrival',
        'client',
        'product'
    ];

    public function client(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function status(): BelongsTo
    {
        return $this->belongsTo(OrderStatus::class, 'status_id', 'status');
    }

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'product_id', 'product');
    }

    public function contact(): BelongsTo
    {
        return $this->belongsTo(Contact::class, 'contact_id', 'contact');
    }
}
