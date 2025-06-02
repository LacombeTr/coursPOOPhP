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

use classes\Contact;

$contact1 = new Contact("Dupont", "Alice", "dupont@gmail.com");
$contact2 = new Contact("Martin", "Bob", "martin@gmail.com");

$contactList = array($contact1, $contact2);

foreach ($contactList as $contact) {
    echo "
______________\n
Nom: {$contact->getName()}\n
Prénom: {$contact->getSurname()}\n
Email: {$contact->getEmail()}\n
    ";
}