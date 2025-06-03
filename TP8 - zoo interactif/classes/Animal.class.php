<?php

namespace classes;

class Animal
{
    public string $name;
    public int $age;

    public function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function describe(): void
    {
        echo "Je suis {$this->name}, j'ai {$this->age} ans}.\n";
    }
}