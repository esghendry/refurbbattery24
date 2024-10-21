<?php

namespace App\Livewire;

use App\Models\Application;
use App\Models\Vacancy;
use App\Notifications\ApplicationConfirmation;
use App\Notifications\FormNotification;
use Illuminate\Support\Facades\Notification;
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
                $application->saveTemporaryFile(
                    file: $cvDocument,
                    preserveFilename: true
                );
            }
        }

        if ($application->wasRecentlyCreated) {
            $this->isSent = true;
            $application->notify((new ApplicationConfirmation));

            Notification::route('mail', contactSettings()->notification_recipients)
                ->notify((new FormNotification(
                    type: 'sollicitatie',
                    url: route('filament.admin.resources.applications.view', $application->id),
                )));
        }

    }

    public function render()
    {
        return view('livewire.application-form');
    }
}
