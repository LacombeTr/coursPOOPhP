<?php

namespace classes;

final class Cercle extends FormeGeometrique
{
    private float $radius;

    public function __construct(float $radius)
    {
        $this->radius = $radius;
    }

    public function calculateArea()
    {
        return 3.14 * 2 * $this->radius;
    }
}