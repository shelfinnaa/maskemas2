<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Measurement extends Model
{
    use HasFactory;
    protected $fillable = [
        'small_start',
        'small_end',
        'med_start',
        'med_end',
        'large_start',
        'large_end',
        'custom_start',
        'custom_end',
    ];
}
