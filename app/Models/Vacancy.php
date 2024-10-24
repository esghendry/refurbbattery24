<?php

namespace App\Models;

use App\Enums\ArticleStatus;
use App\Models\Traits\ImageTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Vacancy extends Model
{
    use HasFactory;
    use ImageTrait;

    protected $guarded = [];

    protected $with = ['user', 'location'];

    protected $casts = [
        'status' => ArticleStatus::class,
        'blocks' => 'json',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function location(): BelongsTo
    {
        return $this->belongsTo(Location::class);
    }
}
