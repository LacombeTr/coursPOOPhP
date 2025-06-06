<?php

namespace classes;

final class ChienOld extends AnimalOld
{
    public string $race;

    public function __construct(string $name, int $age, string $race)
    {
        parent::__construct($name, $age);
        $this->race = $race;
    }

    public function describe(): void
    {
        echo "Je suis un chien {$this->race}.\n";
    }

    public function crier():void
    {
        echo "Wouaf!\n";
    }
}