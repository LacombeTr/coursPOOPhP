<?php

// Autoloader
spl_autoload_register(function ($class) {
    $baseDir = __DIR__ . '/';
    $relativePath = str_replace('\\', '/', $class);
    $possibleDirs = ['classes', 'interfaces'];
    $possibleSuffixes = ['.class.php', '.interface.php'];
    foreach ($possibleDirs as $dir) {
        foreach ($possibleSuffixes as $suffix) {
            $file = $baseDir . $dir . '/' . $relativePath . $suffix;
            if (file_exists($file)) {
                require_once $file;
                return;
            }
        }
    }
    echo "Fichier introuvable pour : $class\n";
});

use classes\NotificationPush;
use classes\NotificationEmail;
use classes\NotificationSMS;

$notifications = array(
    new NotificationEmail(),
    new NotificationSMS(),
    new NotificationPush(),
);

foreach ($notifications as $notification) {
    $notification->sendNotification();
}