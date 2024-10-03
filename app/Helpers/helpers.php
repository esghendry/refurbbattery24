<?php

// namespace App\Helpers;

use App\Settings\ContactSettings;
use App\Settings\GeneralSettings;

if (! function_exists('generalSettings')) {
    function generalSettings()
    {
        return app(GeneralSettings::class);
    }
}

if (! function_exists('contactSettings')) {
    function contactSettings()
    {
        return app(ContactSettings::class);
    }
}
