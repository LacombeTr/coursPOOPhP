<?php

namespace classes;

final class Oiseau extends AnimalOld
{
    public string $espece;

    public function __construct(string $name, int $age, string $espece)
    {
        parent::__construct($name, $age);
        $this->espece = $espece;
    }

    public function describe(): void
    {
        echo "Je suis un oiseau {$this->espece}.\n";
    }

    public function crier():void
    {
        echo "COCO!\n";
    }
}