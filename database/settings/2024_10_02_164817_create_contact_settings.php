<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('contact.bcc', []);
        $this->migrator->add('contact.cc', []);
        $this->migrator->add('contact.email', 'hello@refurbbattery.eu');
        $this->migrator->add('contact.phone', '+31852464999');
        $this->migrator->add('contact.phone_display', '085 246 4999');

        $this->migrator->add('contact.location_name', 'Productiefaciliteit');
        $this->migrator->add('contact.location_image', 'location/rb_production_facility.webp');
        $this->migrator->add('contact.building_name', 'BCT Treeport');

        $this->migrator->add('contact.address', 'Treeport');
        $this->migrator->add('contact.number', '103');
        $this->migrator->add('contact.postal_code', '4891 PZ');
        $this->migrator->add('contact.city', 'Rijsbergen');
    }

    public function down(): void
    {
        $this->migrator->delete('contact.bcc');
        $this->migrator->delete('contact.cc');
        $this->migrator->delete('contact.email');
        $this->migrator->delete('contact.phone');
        $this->migrator->delete('contact.phone_display');

        $this->migrator->delete('contact.location_name');
        $this->migrator->delete('contact.location_image');
        $this->migrator->delete('contact.building_name');

        $this->migrator->delete('contact.address');
        $this->migrator->delete('contact.number');
        $this->migrator->delete('contact.postal_code');
        $this->migrator->delete('contact.city');
    }
};
