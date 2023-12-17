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
    ];

    public function pageKey()
    {
        return $this->hasOne(Page::class, 'page_id', 'page');
    }
}
