<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class EditPassword extends EditRecord
{
    protected static string $resource = UserResource::class;

    public function getTitle(): string
    {
        return "Edit {$this->record->name}'s password";
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('User new password')->schema([
                    TextInput::make('new_password')
                        ->nullable()
                        ->password()
                        ->rule(Password::default()),
                    TextInput::make('new_password_confirmation')
                        ->password()
                        ->same('new_password')
                        ->requiredWith('new_password'),
                ]),
            ]);
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        if (array_key_exists('new_password', $data) && filled($data['new_password'])) {
            $this->record->password = Hash::make($data['new_password']);
        }

        return $data;
    }
}
