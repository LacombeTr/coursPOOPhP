<?php

namespace classes;

class ChienController
{
    private array $dogList = [];

    public function addDog(Chien $dog)
    {
        return $this->dogList[] = $dog;
    }

    public function deleteDog(string $name): void
    {
        foreach ($this->dogList as $index => $dog) {
            if ($dog->getName() === $name) {
                unset($this->dogList[$index]);
                $this->dogList = array_values($this->dogList);
                break;
            }
        }
    }

    public function getDogList(): array
    {
        return $this->dogList;
    }

}
