<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Feedback extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'title',
        'image',
        'feedback',
        'logo',
    ];

    public function user(): BelongsTo{
        return $this->belongsTo(User::class, 'user_id');
    }
}
