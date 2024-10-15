<?php

namespace App\Livewire;

use App\Models\Application;
use App\Models\Vacancy;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class ApplicationForm extends Component
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

    #[Validate('mimes:jpg,jpeg,png,webp,pdf,doc,docx|max:10240')]
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

        $application = Application::create([
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
                $extension = $cvDocument->getClientOriginalExtension();

                switch ($extension) {
                    case 'jpg':
                    case 'jpeg':
                    case 'png':
                    case 'webp':
                        $collection = 'application_images';
                        break;
                    case 'pdf':
                        $collection = 'application_pdf';
                        break;
                    default:
                        $collection = 'application_files';
                        break;
                }

                $application->addMedia($cvDocument)->toMediaCollection($collection);
            }
        }

        if ($application->wasRecentlyCreated) {
            $this->isSent = true;
        }

    }

    public function render()
    {
        return view('livewire.application-form');
    }
}