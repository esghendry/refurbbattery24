<?php

namespace App\Filament\Resources\ApplicationResource\Pages;

use App\Filament\Resources\ApplicationResource;
use Filament\Actions;
use Filament\Forms;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Infolists;
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
            Actions\EditAction::make(),
        ];
    }

    public function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
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
            ]);
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Placeholder::make('vacancy')
                    ->content('Vacancy'),
                TextInput::make('vacancy'),
                TextInput::make('first_name')
                    ->maxLength(255),
                TextInput::make('last_name')
                    ->maxLength(255),
                TextInput::make('email')
                    ->email()
                    ->maxLength(255),
                TextInput::make('phone')
                    ->tel()
                    ->maxLength(255),
                Textarea::make('location')
                    ->columnSpanFull(),
                Textarea::make('languages')
                    ->columnSpanFull(),
                Textarea::make('link')
                    ->columnSpanFull(),
                Textarea::make('how_did_you_find_us')
                    ->columnSpanFull(),
                Textarea::make('source')
                    ->columnSpanFull(),
            ]);
    }
}
