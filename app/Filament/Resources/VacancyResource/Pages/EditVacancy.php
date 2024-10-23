<?php

namespace App\Filament\Resources\VacancyResource\Pages;

use App\Enums\ArticleStatus;
use App\Filament\Resources\VacancyResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditVacancy extends EditRecord
{
    protected static string $resource = VacancyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\Action::make('view')
                ->label('View')
                ->url(fn() => route('vacancy.show', $this->record->slug))
                ->icon('heroicon-o-arrow-top-right-on-square')
                ->color('gray')
                ->openUrlInNewTab()
                ->hidden(fn() => !in_array($this->record->status, [ArticleStatus::PUBLISHED, ArticleStatus::PREVIEW])),
            Actions\DeleteAction::make(),
        ];
    }
}
