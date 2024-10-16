<?php

namespace App\Filament\Resources\ApplicationResource\Pages;

use App\Filament\Resources\ApplicationResource;
use App\Models\Application;
use Filament\Actions;
use Filament\Actions\Action;
use Filament\Infolists;
use Filament\Infolists\Components\Group;
use Filament\Infolists\Components\Split;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\ViewEntry;
use Filament\Infolists\Infolist;
use Filament\Resources\Pages\ViewRecord;

class ViewApplication extends ViewRecord
{
    protected static string $resource = ApplicationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\EditAction::make(),
            Action::make('mark_as_read')
                ->label('Mark as read')
                ->action('markAsRead')
                ->color('warning')
                ->hidden(fn (Application $record): bool => $record->read_at !== null),
        ];
    }

    public function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([

                Split::make([

                    Group::make([

                        Infolists\Components\Section::make()
                            ->columns(2)
                            ->schema([
                                TextEntry::make('vacancy.title')
                                    ->default('Werken-bij index pagina'),
                                TextEntry::make('source')
                                    ->url(fn ($state) => "/{$state}", true),
                            ]),
                        Infolists\Components\Section::make()
                            ->columns(3)
                            ->schema([
                                TextEntry::make('first_name'),
                                TextEntry::make('last_name'),
                                TextEntry::make('email'),
                            ]),
                        Infolists\Components\Section::make()
                            ->columns(2)
                            ->schema([
                                TextEntry::make('phone')
                                    ->default('-'),
                                TextEntry::make('location')
                                    ->default('-'),
                                TextEntry::make('languages')
                                    ->default('-'),
                                TextEntry::make('link')
                                    ->default('-'),
                                TextEntry::make('how_did_you_find_us')
                                    ->default('-'),
                            ]),
                        ViewEntry::make('files')
                            ->view('filament.infolists.entries.application-files')
                            ->columnSpanFull(),

                    ]),

                    Infolists\Components\Section::make([
                        TextEntry::make('created_at'),
                    ])->grow(false),

                ])->columnSpanFull(),
            ]);
    }

    public function markAsRead(): void
    {
        $this->record->update(['read_at' => now()]);
    }
}
