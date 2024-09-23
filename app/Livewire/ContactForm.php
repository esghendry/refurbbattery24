<?php

namespace App\Livewire;

use App\Models\Contact;
use Livewire\Component;

class ContactForm extends Component
{
    public $firstName;

    public $lastName;

    public $email;

    public $phone;

    public $message;

    public $isSent = false;

    public function submit()
    {
        $contact = Contact::create([
            'first_name' => $this->firstName,
            'last_name' => $this->lastName,
            'email' => $this->email,
            'phone' => $this->phone,
            'message' => $this->message,
        ]);

        if ($contact->wasRecentlyCreated) {
            $this->isSent = true;
        }
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
