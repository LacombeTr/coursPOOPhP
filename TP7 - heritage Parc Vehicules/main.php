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

use classes\Moto;
use classes\Camion;
use classes\Voiture;

$kawa = new Moto("Kawasaki", "Ninja", 2005, 123164, 150);
$peugeot = new Voiture("Peugeot", "205", 1988, 265105, 4);
$scania = new Camion("Scania", "45", 2002, 567104, 15000, 10000);

$kawa->displayInfos();
$peugeot->displayInfos();
$scania->displayInfos();

$scania->loadCamion(4000);
$scania->loadCamion(500);
$scania->displayInfos();
$scania->loadCamion(1000);