<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('general.site_name', 'Refurb Battery');
        $this->migrator->add('general.logo', 'logo/RB_Logo.svg');
        $this->migrator->add('general.socials', [
            [
                'platform' => 'linkedin',
                'url' => 'https://nl.linkedin.com/company/refurb-battery',
            ], [
                'platform' => 'instagram',
                'url' => 'https://www.instagram.com/refurb.battery',
            ],
        ]);

        $this->migrator->add('general.co2_prevented', '1795');
        $this->migrator->add('general.partner_count', '11+');
        $this->migrator->add('general.cells_second_life', '1.196.673+');

        // $this->migrator->add('general.partner_logos', []);

    }

    public function down(): void
    {
        $this->migrator->delete('general.site_name');
        $this->migrator->delete('general.logo');
        $this->migrator->delete('general.socials');

        $this->migrator->delete('general.co2_prevented');
        $this->migrator->delete('general.partner_count');
        $this->migrator->delete('general.cells_second_life');

        // $this->migrator->delete('general.partner_logos');
    }
};
