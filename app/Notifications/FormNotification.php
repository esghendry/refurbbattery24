<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class FormNotification extends Notification
{
    use Queueable;

    public string $type;

    public string $url;

    public string $urlText;

    /**
     * Create a new notification instance.
     */
    public function __construct(string $type, string $url, string $urlText = 'Bekijk')
    {
        $this->type = $type;
        $this->url = $url;
        $this->urlText = $urlText;
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
        // no $notifiable, email is sent to a list of email addresses (notification recipients)

        $siteName = generalSettings()->site_name;

        return (new MailMessage)
            ->subject("Nieuw {$this->type} ontvangen - {$siteName}")
            ->greeting('Hallo!')
            ->line("We wilden u informeren dat er een nieuw {$this->type} is ingediend via {$siteName}.")
            ->action("Bekijk {$this->type}", $this->url);
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
