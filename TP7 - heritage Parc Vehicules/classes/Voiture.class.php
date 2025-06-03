<?php

namespace classes;

final class Voiture extends Vehicule
{
    private int $nombrePorte;

    public function __construct(string $marque, string $modele, string $annee, float $kilometrage, int $nombrePorte)
    {
        parent::__construct($marque, $modele, $annee, $kilometrage);
        $this->nombrePorte = $nombrePorte;
    }

    public function displayInfos()
    {
        echo "
   ___________\n
   Marque: {$this->marque}\n
   Modele: {$this->modele}\n
   Annee de construction: {$this->annee}\n
   Kilometrage: {$this->kilometrage}\n
   Nombre de porte: {$this->nombrePorte}\n
       ";
    }
}