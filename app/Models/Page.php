<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Page extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function sections(): MorphToMany
    {
        return $this->morphToMany(Section::class, 'sectionable');
    }
}
