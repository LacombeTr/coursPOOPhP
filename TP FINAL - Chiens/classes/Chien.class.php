<?php

namespace classes;

use enums\Color;
use enums\Gender;
use interfaces\Animal;

class Chien implements Animal
{
    protected string $name;
    protected Gender $gender;
    protected float $weight;
    protected float $age;
    protected string $race;
    protected Color $color;

    protected string $bark;

    public function __construct(string $name, int $age, string $race, Color $color, Gender $gender, float $weight, string $bark)
    {
        $this->name = $name;
        $this->age = $age;
        $this->race = $race;
        $this->color = $color;
        $this->gender = $gender;
        $this->weight = $weight;
        $this->bark = $bark;
    }

    public function getAgeInHumanYear(): float
    {
        return $this->age * 7;
    }

    public function bark()
    {
        echo $this->bark;
    }

    public function isOverWeight(): bool
    {
        return $this->weight >= 20;
    }

    public function getRace(): string
    {
        return $this->race;
    }

    public function getColor(): Color
    {
        return $this->color;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getGender(): Gender
    {
        return $this->gender;
    }

    public function getWeight(): float
    {
        return $this->weight;
    }
}