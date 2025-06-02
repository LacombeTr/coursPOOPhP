<?php

namespace classes;

class CompteBancaire
{
    private float $solde;
    private string $titulaire;

    public function __construct(float $solde, string $titulaire)
    {
        $this->solde = $solde;
        $this->titulaire = $titulaire;
    }

    public function deposit(float $value): void
    {
        $value > 0 ? $this->solde += $value : print("Un dépôt ne peut-être négatif !");
    }

    public function withdraw(float $value): void
    {
        $value > 0 ? $this->solde -= $value : print("Un retrait ne peut-être négatif !");
    }

    public function getSolde(): float
    {
        return $this->solde;
    }

    public function getTitulaire(): string
    {
        return $this->titulaire;
    }

    public function getInterestYear(float $rate)
    {
        return $this->solde * $rate;
    }
}