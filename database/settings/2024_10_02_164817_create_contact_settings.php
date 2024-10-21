<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('contact.notification_recipients', []);
        $this->migrator->add('contact.bcc', []);
        $this->migrator->add('contact.cc', []);
        $this->migrator->add('contact.email', 'hello@refurbbattery.eu');
        $this->migrator->add('contact.phone', '+31852464999');

        $this->migrator->add('contact.location_id', 1);

        $this->migrator->add('contact.vacancy_user_id', 2);
    }

    public function down(): void
    {
        $this->migrator->delete('contact.notification_recipients');
        $this->migrator->delete('contact.bcc');
        $this->migrator->delete('contact.cc');
        $this->migrator->delete('contact.email');
        $this->migrator->delete('contact.phone');

        $this->migrator->delete('contact.location_id');

        $this->migrator->delete('contact.vacancy_user_id');
    }
};
