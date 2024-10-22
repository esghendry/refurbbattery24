<?php

namespace App\Filament\Resources\VacancyResource\Pages;

use App\Filament\Resources\VacancyResource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Str;

class CreateVacancy extends CreateRecord
{
    protected static string $resource = VacancyResource::class;

    protected static bool $canCreateAnother = false;

    public function form(Form $form): Form
    {
        return $form
            ->schema([

                Select::make('user_id')
                    ->label('Recruiter (contact person)')
                    ->relationship('user', 'name')
                    ->searchable(['name', 'email'])
                    ->preload()
                    ->nullable(),

                Select::make('location_id')
                    ->label('Location')
                    ->relationship('location', 'name')
                    ->preload()
                    ->nullable(),

                TextInput::make('title')
                    ->required()
                    ->maxLength(255)
                    ->lazy()
                    ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state))),

                TextInput::make('slug')
                    ->required()
                    ->maxLength(255)
                    ->unique(ignoreRecord: true),
            ]);
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('edit', ['record' => $this->record->id]);
    }

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['blocks'] = [
            0 => [
                'title' => 'Watt levert het mij op?',
                'content' => '<ul><li>List item 1</li><li>List item 2</li></ul>',
            ],
            1 => [
                'title' => 'Watt is mijn missie?',
                'content' => '<ul><li>List item 1</li><li>List item 2</li></ul>',
            ],
            2 => [
                'title' => 'Watt ga ik doen?',
                'content' => '<ul><li>List item 1</li><li>List item 2</li></ul>',
            ],
            3 => [
                'title' => 'Onze energie komt overeen wanneer…',
                'content' => '<ul><li>List item 1</li><li>List item 2</li></ul>',
            ],
        ];

        return $data;
    }
}
