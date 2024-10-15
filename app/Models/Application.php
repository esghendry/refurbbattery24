<?php

namespace App\Models;

use App\Models\Traits\StorageObjectTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;
    use StorageObjectTrait;

    protected $guarded = [];

    public function vacancy()
    {
        return $this->belongsTo(Vacancy::class);
    }
}
