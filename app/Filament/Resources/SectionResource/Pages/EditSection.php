<?php

namespace App\Filament\Resources\SectionResource\Pages;

use App\Filament\Resources\SectionResource;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\EditRecord;

class EditSection extends EditRecord
{
    protected static string $resource = SectionResource::class;

    public ?int $pageRecord = null;

    public function mount(int|string $record): void
    {
        parent::mount($record);

        if (request()->has('pageRecord')) {
            $this->pageRecord = request()->input('pageRecord');
        }
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()
                ->before(function (Actions\DeleteAction $action, $record) {
                    if ($record->pages()->exists()) {
                        Notification::make()
                            ->warning()
                            ->title(__('Failed to delete!'))
                            ->body(__('This section is used in :count page(s).', ['count' => $record->pages()->count()]))
                            ->persistent()
                            ->send();

                        $action->cancel();
                    }
                }),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->previousUrl ?? parent::getRedirectUrl();
    }
}
