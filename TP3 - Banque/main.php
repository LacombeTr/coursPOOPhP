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

use classes\CompteBancaire;

$compteMichel = new CompteBancaire(5449.45, 'Michel Poulain');

$compteMichel->deposit(562.21);
$compteMichel->withdraw(250);
$titulaire = $compteMichel->getTitulaire();

echo "
____________\n
Titulaire: {$titulaire}\n
Solde actuel: {$compteMichel->getSolde()}
";

$tauxInterets = 0.06;
$percentInterest = $tauxInterets * 100;

echo "
Avec un taux d'intérêt de {$percentInterest}%, les intérêts de\n
{$titulaire} pour cette année s'élèveront à {$compteMichel->getInterestYear($tauxInterets)}.
";