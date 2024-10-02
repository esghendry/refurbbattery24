<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class ContactSettings extends Settings
{
    public array $bcc;

    public array $cc;

    public string $email;

    public string $phone;

    public static function group(): string
    {
        return 'contact';
    }
}
