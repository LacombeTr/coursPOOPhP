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

use classes\Livre;
use classes\Ebook;
use classes\LivrePapier;

$rougeEtNoir = new LivrePapier("Le Rouge et le Noir", "Stendhal", 1886, 234);
$tempsdesTempetes = new Ebook("Le temps des tempêtes", "Sarko", 2015, 334);

$tempsdesTempetes->displayInfos();
$rougeEtNoir->displayInfos();