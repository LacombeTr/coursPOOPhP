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

use classes\AreaCalculator;
use classes\Cercle;
use classes\Rectangle;
use classes\Triangle;

$cercle = new Cercle(4);
$rect = new Rectangle(4, 5);
$triangle = new Triangle(4, 5, 1);

$areaCalculator = new AreaCalculator();
echo "aire totale: {$areaCalculator->calculateTotalArea(array($cercle, $rect, $triangle))}";