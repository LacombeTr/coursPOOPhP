<?php

namespace classes;

final class Triangle extends FormeGeometrique
{
    private float $side1;
    private float $side2;
    private float $side3;

    public function __construct(float $side1, float $side2, float $side3)
    {
        $this->side1 = $side1;
        $this->side2 = $side2;
        $this->side3 = $side3;
    }

    public function calculateArea()
    {
        $demiPerim = ($this->side1 + $this->side2 + $this->side3) / 2;
        return sqrt($demiPerim * ($demiPerim - $this->side1) * ($demiPerim - $this->side2) * ($demiPerim - $this->side3));
    }
}