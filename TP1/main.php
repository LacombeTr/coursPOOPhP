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

use classes\Etudiant;

$etudiant1 = new Etudiant("Léo", 24);
$etudiant2 = new Etudiant("Claudia", 23);

$etudiant1->addNote(18.4);
$etudiant1->addNote(11.2);
$etudiant1->addNote(13.4);

$etudiant2->addNote(16.3);
$etudiant2->addNote(15.3);
$etudiant2->addNote(19.5);

// var_dump($etudiant1->getNotes());
// var_dump($etudiant2->getNotes());

// echo $etudiant1->calculateMean();
// echo $etudiant2->calculateMean();

$etudiant1->getInfos();
$etudiant2->getInfos();