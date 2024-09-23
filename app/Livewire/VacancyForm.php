<?php

namespace App\Livewire;

use App\Models\Vacancy;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class VacancyForm extends Component
{
    use WithFileUploads;

    public $firstName;

    public $lastName;

    public $email;

    public $phone;

    public $location;

    public $languages;

    public $link;

    public $howDidYouFindUs;

    public $cvDocuments;

    public $source;

    public $isSent = false;

    public function __construct($source = '')
    {
        $this->source = $source;
    }

    public function submit()
    {
        $vacancy = Vacancy::create([
            'first_name' => $this->firstName,
            'last_name' => $this->lastName,
            'email' => $this->email,
            'phone' => $this->phone,
            'location' => $this->location,
            'languages' => $this->languages,
            'link' => $this->link,
            'how_did_you_find_us' => $this->howDidYouFindUs,
        ]);

        if (is_array($this->cvDocuments)) {
            foreach ($this->cvDocuments as $cvDocument) {
                $vacancy->addMedia($cvDocument)->toMediaCollection();
            }
        }

        if ($vacancy->wasRecentlyCreated) {
            $this->isSent = true;
        }

    }

    public function render()
    {
        return view('livewire.vacancy-form');
    }
}
