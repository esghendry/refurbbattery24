<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ContactConfirmation extends Notification implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct() {}

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
        $bcc = contactSettings()->bcc;

        $cc = contactSettings()->cc;

        return (new MailMessage)
            ->from('no-reply@refurbbattery.nl', 'Refurb Battery')
            ->bcc($bcc)
            ->cc($cc)
            ->subject('Bevestiging contactformulier')
            ->greeting("Beste {$notifiable->first_name} {$notifiable->last_name},")
            ->line('Bedankt voor het invullen van het contactformulier. We hebben uw bericht ontvangen.')
            ->line('Hieronder de informatie die u heeft ingediend. Met deze informatie proberen wij contact op te nemen als dat van toepassing is.')
            ->line('Naam: '.$notifiable->first_name.' '.$notifiable->last_name)
            ->line('E-mail: '.$notifiable->email)
            ->line('Telefoonnummer: '.$notifiable->phone)
            ->line('Bericht: '.$notifiable->message);
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
