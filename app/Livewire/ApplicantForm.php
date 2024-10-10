<?php

namespace App\Livewire;

use App\Models\Applicant;
use App\Models\Vacancy;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class ApplicantForm extends Component
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

    public $slug = '';

    public $isSent = false;

    public function __construct($source = '', $slug = '')
    {
        $this->source = $source;
        $this->slug = $slug;
    }

    public function submit()
    {
        $vacancy = Vacancy::where('slug', $this->slug)->first();

        $applicant = Applicant::create([
            'vacancy_id' => $vacancy?->id ?? null,
            'first_name' => $this->firstName,
            'last_name' => $this->lastName,
            'email' => $this->email,
            'phone' => $this->phone,
            'location' => $this->location,
            'languages' => $this->languages,
            'link' => $this->link,
            'how_did_you_find_us' => $this->howDidYouFindUs,
            'source' => $this->source,
        ]);

        if (is_array($this->cvDocuments)) {
            foreach ($this->cvDocuments as $cvDocument) {
                $applicant->addMedia($cvDocument)->toMediaCollection('application_media');
            }
        }

        if ($applicant->wasRecentlyCreated) {
            $this->isSent = true;
        }

    }

    public function render()
    {
        return view('livewire.applicant-form');
    }
}
