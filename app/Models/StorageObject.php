<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class StorageObject extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function model(): MorphTo
    {
        return $this->morphTo();
    }

    public function storageObjectable()
    {
        return $this->morphTo();
    }
}
