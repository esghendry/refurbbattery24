<?php

namespace App\Livewire;

use Livewire\Component;

class ContactForm extends Component
{
    public $firstName;

    public $lastName;

    public $email;

    public $phone;

    public $message;

    public function submit()
    {
        // TODO
        dd($this);
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
