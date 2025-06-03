<?php

namespace classes;

class Triangle extends FormeGeometrique
{
    public function calculateArea(float $side1, float $side2, float $side3)
    {
        $demiPerim = ($side1 + $side2 + $side3) / 2;
        return sqrt($demiPerim * ($demiPerim - $side1) * ($demiPerim - $side2) * ($demiPerim - $side3));
    }
}