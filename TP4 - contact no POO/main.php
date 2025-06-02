<?php


$contact1 = array(
    'Nom' => 'Dupont',
    'Prénom' => 'Alice',
    'Email' => 'dupont@gmail.com',
);

$contact2 = array(
    'Nom' => 'Martin',
    'Prénom' => 'Emile',
    'Email' => 'martin@gmail.com',
);

$contactList = array($contact1, $contact2);

foreach ($contactList as $contact) {
    echo "
______________\n
Nom: {$contact['Nom']}\n
Prénom: {$contact['Prénom']}\n
Email: {$contact['Email']}
    ";
}