<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ApplicationConfirmation extends Notification implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        $mailMessage = (new MailMessage)
            ->subject('Bevestiging sollicitatieformulier')
            ->greeting("Beste {$notifiable->first_name} {$notifiable->last_name},")
            ->line('Bedankt voor het invullen van het sollicitatieformulier. We hebben uw sollicitatie ontvangen.')
            ->line('Hieronder de informatie die u heeft ingediend.')
            ->line('Naam: '.$notifiable->first_name.' '.$notifiable->last_name)
            ->line('E-mail: '.$notifiable->email);

        if ($notifiable->phone) {
            $mailMessage->line('Telefoonnummer: '.$notifiable->phone);
        }

        if ($notifiable->location) {
            $mailMessage->line('Locatie: '.$notifiable->location);
        }

        if ($notifiable->languages) {
            $mailMessage->line('Talen: '.$notifiable->languages);
        }

        if ($notifiable->link) {
            $mailMessage->line('Link naar je LinkedIn of je CV: '.$notifiable->link);
        }

        if ($notifiable->how_did_you_find_us) {
            $mailMessage->line('Hoe je ons gevonden hebt: '.$notifiable->how_did_you_find_us);
        }

        if (count($notifiable->storageObjects) > 0) {
            $mailMessage->line('Bestanden: '.$notifiable->storageObjects->pluck('filename')->map(fn ($filename) => "'$filename'")->implode(', '));
        }

        return $mailMessage;
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
