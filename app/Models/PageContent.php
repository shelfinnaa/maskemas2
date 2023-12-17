<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageContent extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'content',
        'page'
    ];

    public function pageKey()
    {
        return $this->hasOne(Page::class, 'id', 'page');
    }
}
