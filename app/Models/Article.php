<?php

namespace App\Models;

use App\Enums\ArticleStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Article extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'status' => ArticleStatus::class,
        'published_at' => 'datetime',
        'is_listed' => 'boolean',
    ];

    public function registerMediaConversions(?Media $media = null): void
    {
        $this->addMediaConversion('media-webp')
            ->format('webp');
    }
}
