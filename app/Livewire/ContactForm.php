<?php

namespace App\Livewire;

use App\Filament\Resources\ContactMessageResource;
use App\Models\ContactMessage;
use App\Notifications\ContactConfirmation;
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
        $contact = ContactMessage::create([
            'first_name' => $this->firstName,
            'last_name' => $this->lastName,
            'email' => $this->email,
            'phone' => $this->phone,
            'message' => $this->message,
        ]);

        if ($contact->wasRecentlyCreated) {
            $this->isSent = true;
        }

        $contact->notify((new ContactConfirmation));

        notifyDashboardUsers($contact, ContactMessageResource::class);
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
