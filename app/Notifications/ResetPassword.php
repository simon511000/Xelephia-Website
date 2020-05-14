<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Lang;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Auth\Notifications\ResetPassword as ResetPasswordNotification;

class ResetPassword extends ResetPasswordNotification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($token)
    {
        parent::__construct($token);
    }

    public function toMail($notifiable)
    {
        if (static::$toMailCallback) {
            return call_user_func(static::$toMailCallback, $notifiable, $this->token);
        }

        if (static::$createUrlCallback) {
            $url = call_user_func(static::$createUrlCallback, $notifiable, $this->token);
        } else {
            $url = url(route('password.reset', [
                'token' => $this->token,
                'email' => $notifiable->getEmailForPasswordReset(),
            ], false));
        }

        return (new MailMessage)
            ->greeting('Hey!')
            ->subject(Lang::get('Réinitialisation du mot de passe'))
            ->line(Lang::get('Vous recevez cet email parce que nous avons reçu une demande de réinitialisation de mot de passe pour votre compte.'))
            ->action(Lang::get('Réinitialiser mon mot de passe'), $url)
            ->line(Lang::get('Ce lien expirera dans :count minutes.', ['count' => config('auth.passwords.'.config('auth.defaults.passwords').'.expire')]))
            ->line(Lang::get('Si vous n\'avez pas envoyé de demande, aucune action n\'est requise.'));
    }
}
