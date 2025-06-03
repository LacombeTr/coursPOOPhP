<?php

namespace classes;

use interfaces\Notifiable;

class NotificationEmail implements Notifiable
{
    public function sendNotification(): void
    {
        echo "Envoi d'un email\n";
    }

    final public function SMTPConfig(): string
    {
        echo "Serveur configuré\n";
    }
}