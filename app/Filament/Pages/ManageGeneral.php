<?php

namespace App\Filament\Pages;

use App\Settings\GeneralSettings;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Pages\SettingsPage;

class ManageGeneral extends SettingsPage
{
    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';

    protected static string $settings = GeneralSettings::class;

    protected static ?string $navigationGroup = 'Settings';

    protected static ?int $navigationSort = 1;

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('site_name'),
                FileUpload::make('logo')
                    ->image()
                    ->disk('do')
                    ->directory('logo')
                    ->visibility('public')
                    ->preserveFilenames(),
                Repeater::make('socials')
                    ->schema([
                        TextInput::make('platform')
                            ->columnSpan(1),
                        TextInput::make('url')
                            ->columnSpan(1),
                    ])
                    ->columns(2)
                    ->grid(2)
                    ->columnSpanFull(),
                Section::make()
                    ->description('We doen meer met minder.')
                    ->schema([
                        TextInput::make('co2_prevented')
                            ->helperText('CO₂-uitstoot voorkomen met ons circulaire proces (*en de teller loopt nog!)'),
                        TextInput::make('partner_count')
                            ->helperText('Samenwerkingen met organisaties en marktleiders zoals Accell en Stichting OPEN.'),
                        TextInput::make('cells_second_life')
                            ->helperText('Al meer dan één miljoen cellen kregen bij ons een tweede leven.'),
                    ])
                    ->columns(3),
                // Repeater::make('partner_logos')
                //     ->simple(
                //         FileUpload::make('logo')
                //             ->image()
                //             ->disk('do')
                //             ->directory('partners/logos')
                //             ->visibility('public')
                //             ->preserveFilenames()
                //     )
                //     ->grid(3)
                //     ->columnSpanFull(),
            ]);
    }
}
