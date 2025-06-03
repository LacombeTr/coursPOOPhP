<?php

// Autoloader
spl_autoload_register(function ($class) {
    $path = '' . str_replace('\\', '/', $class) . '.class.php';
    if (file_exists($path)) {
        include $path;
    } else {
        echo "Fichier introuvable : $path\n";
    }
});

use classes\PaymentCreditCard;
use classes\PaymentPaypal;
use classes\PaymentBankTransfer;

$listePaiements = array(
    new PaymentPaypal(4.34),
    new PaymentBankTransfer(23.11),
    new PaymentCreditCard(11.30),
    new PaymentPaypal(5.45),
    new PaymentPaypal(67.12),
    new PaymentCreditCard(86.33),
);

foreach ($listePaiements as $paiement) {
    $paiement->displayAmount();
    $paiement->pay();
}