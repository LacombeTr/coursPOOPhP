<?php

namespace classes;

class Produit
{
    private string $name;
    private float $prix;

    public function __construct(string $name, float $prix)
    {
        $this->name = $name;
        $this->prix = $prix;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPrix(): float
    {
        return $this->prix;
    }

    public function getInfos(): void
    {
        echo "
____________\n
{$this->name}\n
Prix: {$this->prix}€
";
    }

    public function addToCart(int $quantity, Panier $panier)
    {
        for ($i = 0; $i < $quantity; $i++) {
            $panier->panier[] = $this;
        }
    }
}