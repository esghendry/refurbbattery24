<?php

namespace App\Models;

use App\Enums\ArticleStatus;
use App\Models\Traits\ImageTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    use ImageTrait;

    protected $guarded = [];

    protected $casts = [
        'status' => ArticleStatus::class,
        'published_at' => 'datetime',
        'is_listed' => 'boolean',
    ];
}
