<?php

namespace classes;

final class Camion extends Vehicule
{
    private float $poidsMax;
    private float $chargeActuelle;

    public function __construct(string $marque, string $modele, string $annee, float $kilometrage, float $poidsMax, float $chargeActuelle)
    {
        parent::__construct($marque, $modele, $annee, $kilometrage);
        $this->poidsMax = $poidsMax;
        $this->chargeActuelle = $chargeActuelle;
    }

    public function displayInfos()
    {
        parent::displayInfos();
        echo "
   Poids max.: {$this->poidsMax}\n
   Charge: {$this->chargeActuelle}\n
       ";
    }

    public function loadCamion(float $charge)
    {
        if ($this->chargeActuelle + $charge < $this->poidsMax) {
            $this->chargeActuelle += $charge;
            echo "Nouvelle charge: {$this->chargeActuelle}\n";
        } else {
            echo "La charge du camion est trop lourde !";
        }
    }
}