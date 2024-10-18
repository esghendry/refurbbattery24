<?php

namespace App\Filament\Actions;

use Filament\Actions\Action;
use Filament\Facades\Filament;
use Filament\Notifications\Auth\ResetPassword as ResetPasswordNotification;
use Filament\Notifications\Notification;
use Illuminate\Contracts\Auth\CanResetPassword;
use Illuminate\Support\Facades\Password;

class SendPasswordResetAction extends Action
{
    public static function getDefaultName(): ?string
    {
        return 'sendPasswordReset';
    }

    protected function setUp(): void
    {
        parent::setUp();

        $this->icon('heroicon-o-key')
            ->color('danger')
            ->requiresConfirmation()
            ->action(function () {
                $user = $this->record;

                $status = Password::broker(Filament::getAuthPasswordBroker())->sendResetLink(
                    $user->only('email'),
                    function (CanResetPassword $user, string $token): void {

                        $notification = new ResetPasswordNotification($token);
                        $notification->url = Filament::getResetPasswordUrl($token, $user);

                        $user->notify($notification);
                    }
                );

                if ($status !== Password::RESET_LINK_SENT) {
                    Notification::make()
                        ->title(__($status))
                        ->danger()
                        ->send();

                    return;
                }

                Notification::make()
                    ->title(__("We have emailed the password reset link to '{$user->email}'."))
                    ->success()
                    ->send();
            });
    }
}
