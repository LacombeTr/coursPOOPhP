<?php

namespace classes;

use interfaces\Notifiable;

class NotificationSMS implements Notifiable
{
    public function sendNotification(): void
    {
        echo "Envoi d'un SMS\n";
    }
}