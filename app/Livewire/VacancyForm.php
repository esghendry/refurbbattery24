<?php

namespace App\Livewire;

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

    public function __construct($source = '')
    {
        $this->source = $source;
    }

    public function submit()
    {
        // TODO
        dd($this);
    }

    public function render()
    {
        return view('livewire.vacancy-form');
    }
}
