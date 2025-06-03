<?php

namespace classes;

final class Chat extends Animal
{
    public string $couleur;

    public function __construct(string $name, int $age, string $couleur)
    {
        parent::__construct($name, $age);
        $this->couleur = $couleur;
    }

    public function describe(): void
    {
        echo "Je suis un chat de couleur {$this->couleur}.\n";
    }

    public function crier():void
    {
        echo "Miaou.\n";
    }
}