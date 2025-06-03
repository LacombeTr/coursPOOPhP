<?php

namespace classes;

use interfaces\Notifiable;

class NotificationPush implements Notifiable
{
    public function sendNotification(): void
    {
        echo "Envoi d'une notification push\n";
    }
}