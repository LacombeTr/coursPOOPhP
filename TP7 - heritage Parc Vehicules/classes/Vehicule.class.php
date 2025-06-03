<?php

namespace classes;

class Vehicule
{
    protected string $marque;
    protected string $modele;
    protected int $annee;
    protected float $kilometrage;
    protected \DateTime $dernierEntretien;

    public function __construct(string $marque, string $modele, int $annee, int $kilometrage)
    {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->annee = $annee;
        $this->kilometrage = $kilometrage;
    }

    public function displayInfos()
    {
        echo "
   ___________\n
   Marque: {$this->marque}\n
   Modele: {$this->modele}\n
   Annee de construction: {$this->annee}\n
   Kilometrage: {$this->kilometrage}\n
       ";
    }

    public function programMaintenance(\DateTime $date)
    {
        $this->dernierEntretien = $date;
    }

    public function displayNextMaintenance()
    {
        echo "Prochain entretien le: {$this->dernierEntretien->format('d/m/Y')}\n";
    }

}