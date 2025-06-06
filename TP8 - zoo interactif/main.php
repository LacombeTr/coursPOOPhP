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

use classes\ChienOld;
use classes\Chat;
use classes\Oiseau;

$mesAnimaux = array(
    new ChienOld("Médor", 6, "Bouvier Bernois"),
    new Chat("Biscotte", 11, "grise"),
    new Oiseau("Coco", 22, "gris du Gabon")
);

foreach ($mesAnimaux as $animal) {
    $animal->describe();
    $animal->crier();
}