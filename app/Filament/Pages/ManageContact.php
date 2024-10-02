<?php

namespace App\Filament\Pages;

use App\Settings\ContactSettings;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Pages\SettingsPage;

class ManageContact extends SettingsPage
{
    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';

    protected static string $settings = ContactSettings::class;

    protected static ?string $navigationGroup = 'Settings';

    protected static ?int $navigationSort = 2;

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Repeater::make('bcc')
                    ->simple(
                        TextInput::make('email')
                            ->type('email')
                            ->required()
                    ),

                Repeater::make('cc')
                    ->simple(
                        TextInput::make('email')
                            ->type('email')
                            ->required()
                    ),

                TextInput::make('email'),
                TextInput::make('phone'),
                TextInput::make('phone_display'),
            ]);
    }
}
