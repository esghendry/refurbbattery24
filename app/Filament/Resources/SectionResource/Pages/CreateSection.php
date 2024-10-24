<?php

namespace App\Filament\Resources\SectionResource\Pages;

use App\Filament\Resources\SectionResource;
use App\Models\Page;
use Filament\Resources\Pages\CreateRecord;

class CreateSection extends CreateRecord
{
    protected static string $resource = SectionResource::class;

    public ?int $pageRecord = null;

    public function mount(): void
    {
        parent::mount();

        // get the page record id from the request, which will be present if the user got here through EditPage
        // so we can attach this record to the given page after creating.
        if (request()->has('pageRecord')) {
            $this->pageRecord = request()->input('pageRecord');
        }
    }

    protected function afterCreate()
    {
        if ($this->pageRecord) {
            $page = Page::find($this->pageRecord);
            $page->sections()->attach($this->record->id);
        }
    }

    protected function getRedirectUrl(): string
    {
        return $this->previousUrl ?? parent::getRedirectUrl();
    }
}
