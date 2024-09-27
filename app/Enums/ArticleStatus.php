<?php

namespace App\Enums;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasLabel;

enum ArticleStatus: string implements HasColor, HasLabel
{
    case DRAFT = 'draft';
    case PREVIEW = 'preview';
    case PUBLISHED = 'published';
    case REJECTED = 'rejected';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::DRAFT => 'Draft',
            self::PREVIEW => 'Preview',
            self::PUBLISHED => 'Published',
            self::REJECTED => 'Rejected',
        };
    }

    public function getColor(): string|array|null
    {
        return match ($this) {
            self::DRAFT => 'gray',
            self::PREVIEW => 'warning',
            self::PUBLISHED => 'success',
            self::REJECTED => 'danger',
        };
    }
}
