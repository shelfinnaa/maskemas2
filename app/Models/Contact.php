<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = [
        'platform',
        'details'
    ];

    public function user(): BelongsTo
    {
        return  $this->belongsTo(User::class, 'user_id', 'user');
    }

    public function order(): HasMany
    {
        return $this->hasMany(Order::class, 'order_id', 'order');
    }
}
