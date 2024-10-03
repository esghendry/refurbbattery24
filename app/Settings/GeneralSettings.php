<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class GeneralSettings extends Settings
{
    public string $site_name;

    public string $logo;

    public array $socials;

    public string $co2_prevented;

    public string $partner_count;

    public string $cells_second_life;

    // public array $partner_logos;

    public static function group(): string
    {
        return 'general';
    }
}
