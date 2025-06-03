<?php

namespace classes;

final class Rectangle extends FormeGeometrique
{
    private float $side1;
    private float $side2;

    public function __construct(float $side1, float $side2)
    {
        $this->side1 = $side1;
        $this->side2 = $side2;
    }

    public function calculateArea()
    {
        return $this->side1 * $this->side2;
    }
}