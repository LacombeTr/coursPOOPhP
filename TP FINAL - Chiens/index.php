<?php

// Autoloader
spl_autoload_register(function ($class) {
    $baseDir = __DIR__ . '/';
    $relativePath = str_replace('\\', '/', $class);
    $possibleDirs = ['classes', 'interfaces', 'enums'];
    $suffixes = [
        '.class.php',
        '.interface.php',
        '.enum.php'
    ];

    foreach ($suffixes as $suffix) {
        $file = $baseDir . $relativePath . $suffix;
        if (file_exists($file)) {
            require_once $file;
            return;
        }
    }

    echo "Fichier introuvable pour : $class\n";
});

use classes\Chien;
use classes\ChienDeChasse;
use enums\Color;
use enums\Gender;

$chien1 = new Chien("Médor", 5, "Labrador", Color::gold, Gender::Male, 22, "Waf");
$chien2 = new ChienDeChasse("Xena", 12, "Fox Terrier", Color::grey, Gender::Female, 10, "Woof");
