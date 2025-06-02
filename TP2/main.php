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

use classes\Produit;
use classes\Panier;

$pommeGranny = new Produit("Pomme granny smith", 2.40);
$pasteque = new Produit("Pastèque", 4.50);
$poivronRouge = new Produit("Poivron rouge", 0.90);
$barquetteFraise = new Produit("Barquette de fraises", 3.60);
$sacPommeTerre = new Produit("Sac de pommes de terre", 2.20);

// Partie 2__________________________________________________________________________________________

// $pommeGranny -> getInfos();
// $pasteque -> getInfos();
// $poivronRouge -> getInfos();
// $barquetteFraise -> getInfos();
// $sacPommeTerre -> getInfos();

// Partie 3__________________________________________________________________________________________

$panier = new Panier(array($pommeGranny, $poivronRouge, $sacPommeTerre));
// $panier->displayPanier();

echo "
____________
Votre panier s'élève à {$panier->calculateTotal()}€
";

// Partie 4__________________________________________________________________________________________

$poivronRouge->addToCart(3, $panier);
// $panier->displayPanier();

echo "
____________
Votre panier s'élève à {$panier->calculateTotal()}€
";

$panier->displayContent();