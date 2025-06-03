<?php

namespace classes;

final class Moto extends Vehicule
{
    private int $cylindree;

    public function __construct(string $marque, string $modele, string $annee, float $kilometrage, int $cylindree)
    {
        parent::__construct($marque, $modele, $annee, $kilometrage);
        $this->cylindree = $cylindree;
    }

    public function displayInfos()
    {
        echo "
   ___________\n
   Marque: {$this->marque}\n
   Modele: {$this->modele}\n
   Annee de construction: {$this->annee}\n
   Kilometrage: {$this->kilometrage}\n
   Cylindrée: {$this->cylindree}\n
       ";
    }
}