<?php

namespace classes;

use enums\Color;
use enums\Gender;

final class ChienDeChasse extends Chien
{

    public function __construct(string $name, int $age, string $race, Color $color, Gender $gender, float $weight, string $bark)
    {
        parent::__construct($name, $age, $race, $color, $gender, $weight, $bark);
    }

    public function isRetired(): bool
    {
        return $this->age >= 9;
    }
}