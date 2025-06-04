<?php

// Autoloader
spl_autoload_register(function ($class) {
    $baseDir = __DIR__ . '/';
    $relativePath = str_replace('\\', '/', $class);
    $possibleDirs = ['classes', 'interfaces', 'enums'];
    $possibleSuffixes = ['.class.php', '.interface.php','.enum.php'];
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

use classes\ReservationConflictException;
use classes\Room;
use classes\Reservation;
use classes\Customer;
use enums\TypeChambre;
use enums\status;

$chbr501 = new Room(0, "501", TypeChambre::Simple, 110);
$chbr502 = new Room(1, "502", TypeChambre::Simple, 110);
$chbr503 = new Room(2, "503", TypeChambre::Simple, 110);
$chbr504 = new Room(3, "504", TypeChambre::Simple, 110);
$chbr505 = new Room(4, "505", TypeChambre::Simple, 110);

$noirot = new Customer("0", "Noirot", "Noirot@mail.com");
$caprin = new Customer("1", "Caprin", "Caprin@mail.com");
$tevenais = new Customer("2", "Tevenais", "Tevenais@mail.com");

$reservation1 = new Reservation("0", $chbr501, $noirot, new DateTime("2024-07-01"), new DateTime("2024-09-01"), status::Confirmed);
$reservation2 = new Reservation("1", $chbr502, $tevenais, new DateTime("2024-07-04"), new DateTime("2024-09-01"), status::Confirmed);
$reservation3 = new Reservation("2", $chbr503, $caprin, new DateTime("2024-07-02"), new DateTime("2024-09-01"), status::Confirmed);

try {
    $reservation4Error = new Reservation("3", $chbr504, $tevenais, new DateTime("2024-07-01"), new DateTime("2024-09-01"), status::Confirmed);
} catch (ReservationConflictException $e) {
    throw new ReservationConflictException($e->getMessage());
}

$reservation4New = new Reservation("4", $chbr501, $noirot, new DateTime("2026-07-04"), new DateTime("2026-09-05"), status::Confirmed);

$noirot->addReservation($reservation1);
$noirot->addReservation($reservation4New);
$caprin->addReservation($reservation3);
$tevenais->addReservation($reservation2);

var_dump($noirot->getReservationsHistory());

// - Calculer le chiffre d’affaires total de l’hôtel pour le mois en cours
// - Lister les chambres disponibles sur une période donnée

