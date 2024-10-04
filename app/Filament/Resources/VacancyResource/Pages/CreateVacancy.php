<?php

namespace App\Filament\Resources\VacancyResource\Pages;

use App\Filament\Resources\VacancyResource;
use Filament\Resources\Pages\CreateRecord;

class CreateVacancy extends CreateRecord
{
    protected static string $resource = VacancyResource::class;

    protected static bool $canCreateAnother = false;
}
