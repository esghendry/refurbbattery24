<?php

namespace App\Filament\Resources\ContactMessageResource\Pages;

use App\Filament\Resources\ContactMessageResource;
use Filament\Actions;
use Filament\Infolists\Components\Section;
use Filament\Infolists\Components\Split;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Infolist;
use Filament\Resources\Pages\ViewRecord;

class ViewContactMessage extends ViewRecord
{
    protected static string $resource = ContactMessageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\EditAction::make(),
        ];
    }

    public function infolist(Infolist $infolist): Infolist
    {
        return $infolist->schema([
            Split::make([
                Section::make([
                    TextEntry::make('first_name'),
                    TextEntry::make('last_name'),
                    TextEntry::make('email')
                        ->url(fn ($state) => "mailto:{$state}", true)
                        ->openUrlInNewTab(false),
                    TextEntry::make('phone'),
                    TextEntry::make('message'),

                ])->columns(2),

                Section::make([
                    TextEntry::make('created_at'),
                ])->grow(false),
            ])->columnSpanFull(),
        ]);
    }
}
