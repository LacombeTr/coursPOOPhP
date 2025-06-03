<?php

namespace classes;

class Rectangle extends FormeGeometrique
{
    public function calculateArea(float $side1, float $side2)
    {
        return $side1 * $side2;
    }
}