<?php

namespace App\Filament\Pages;

use App\Models\Location;
use App\Models\User;
use App\Settings\ContactSettings;
use BezhanSalleh\FilamentShield\Traits\HasPageShield;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Pages\SettingsPage;

class ManageContact extends SettingsPage
{
    use HasPageShield;

    protected static string $settings = ContactSettings::class;

    protected static ?string $navigationGroup = 'Admin';

    protected static ?string $title = 'Contact';

    protected static ?int $navigationSort = 2;

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Repeater::make('notification_recipients')
                    ->label('Notification recipients')
                    ->helperText('Send form notifications to these email addresses.')
                    ->columnSpanFull()
                    ->simple(
                        TextInput::make('email')
                            ->type('email')
                            ->required()
                    ),

                // Repeater::make('cc')
                //     ->simple(
                //         TextInput::make('email')
                //             ->type('email')
                //             ->required()
                //     ),

                TextInput::make('email'),
                Section::make([
                    TextInput::make('phone')
                        ->prefix('tel:'),
                    TextInput::make('phone_display'),
                ]),

                Select::make('vacancy_user_id')
                    ->label('Recruiter (contact person)')
                    ->helperText('The contact person for /werken-bij and the default for new vacancies.')
                    ->options(User::query()->pluck('name', 'id'))
                    ->searchable(['name', 'email'])
                    ->preload()
                    ->nullable(),

                Select::make('location_id')
                    ->label('Location')
                    ->options(Location::query()->pluck('name', 'id'))
                    ->preload()
                    ->nullable(),

            ]);
    }
}
