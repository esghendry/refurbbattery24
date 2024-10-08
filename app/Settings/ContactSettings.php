<?php

namespace App\Settings;

use App\Models\Location;
use App\Models\User;
use Spatie\LaravelSettings\Settings;

class ContactSettings extends Settings
{
    public array $bcc;

    public array $cc;

    public string $email;

    public string $phone;

    public string $phone_display;

    public int $location_id;

    public int $vacancy_user_id;

    public static function group(): string
    {
        return 'contact';
    }

    public function vacancyUser()
    {
        return User::find($this->vacancy_user_id);
    }

    public function location()
    {
        return Location::find($this->location_id);
    }
}
