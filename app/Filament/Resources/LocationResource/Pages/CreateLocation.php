<?php

namespace App\Filament\Resources\LocationResource\Pages;

use App\Filament\Resources\LocationResource;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Pages\CreateRecord;

class CreateLocation extends CreateRecord
{
    protected static string $resource = LocationResource::class;

    protected static bool $canCreateAnother = false;

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                    ->columns(2)
                    ->columnSpanFull()
                    ->schema([
                        TextInput::make('name')
                            ->maxLength(255),
                        TextInput::make('building_name')
                            ->maxLength(255),
                    ]),
                TextInput::make('address')
                    ->maxLength(255),
                TextInput::make('number')
                    ->maxLength(255),
                TextInput::make('postal_code')
                    ->maxLength(255),
                TextInput::make('city')
                    ->maxLength(255),
                TextInput::make('province')
                    ->maxLength(255),
                TextInput::make('country')
                    ->maxLength(255),
            ]);
    }
}
