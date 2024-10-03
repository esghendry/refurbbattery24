<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class ContactSettings extends Settings
{
    public array $bcc;

    public array $cc;

    public string $email;

    public string $phone;

    public string $phone_display;

    public string $location_name;

    public string $location_image;

    public string $building_name;

    public string $address;

    public string $number;

    public string $postal_code;

    public string $city;

    public static function group(): string
    {
        return 'contact';
    }
}
