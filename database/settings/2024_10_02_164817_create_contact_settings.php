<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('contact.bcc', []);
        $this->migrator->add('contact.cc', []);
        $this->migrator->add('contact.email', 'hello@refurbbattery.eu');
        $this->migrator->add('contact.phone', 'tel:+31852464999');
        $this->migrator->add('contact.phone_display', '085 246 4999');
    }

    public function down(): void
    {
        $this->migrator->delete('contact.bcc');
        $this->migrator->delete('contact.cc');
        $this->migrator->delete('contact.email');
        $this->migrator->delete('contact.phone');
        $this->migrator->delete('contact.phone_display');
    }
};
