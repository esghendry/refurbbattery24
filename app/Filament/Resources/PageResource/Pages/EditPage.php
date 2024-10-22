<?php

namespace App\Filament\Resources\PageResource\Pages;

use App\Enums\ArticleStatus;
use App\Filament\Resources\PageResource;
use Filament\Actions;
use Filament\Forms\Components;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Split;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Str;

class EditPage extends EditRecord
{
    protected static string $resource = PageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([

                Split::make([

                    Components\Section::make([

                        TextInput::make('title')
                            ->required()
                            ->maxLength(255)
                            ->lazy()
                            ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state))),
                        TextInput::make('slug')
                            ->required()
                            ->maxLength(255)
                            ->unique(ignoreRecord: true),
                    ])->columns([
                        'md' => 2,
                    ]),

                    Components\Group::make([

                        Components\Section::make(__('Publish'))
                            ->description(__('Settings for publishing this page.'))
                            ->schema([
                                Select::make('status')
                                    ->options(ArticleStatus::class)
                                    ->required()
                                    ->live(),

                                Components\Group::make([
                                    DateTimePicker::make('published_at'),
                                    DateTimePicker::make('published_until'),
                                ])->hidden(fn (Get $get) => $get('status') !== ArticleStatus::PUBLISHED->value),

                                Placeholder::make('created_at')
                                    ->label(__('Created'))
                                    ->hidden(fn ($record) => $record === null)
                                    ->content(fn ($record): string => $record->created_at->diffForHumans()),

                                Placeholder::make('updated_at')
                                    ->label(__('Updated'))
                                    ->hidden(fn ($record) => $record === null)
                                    ->content(fn ($record): string => $record->updated_at->diffForHumans()),
                            ]),

                    ])->grow(false),

                ])->columnSpanFull()->from('md'),

                // TextInput::make('data'),
                // DateTimePicker::make('published_at'),
                // DateTimePicker::make('published_until'),
            ]);
    }
}
