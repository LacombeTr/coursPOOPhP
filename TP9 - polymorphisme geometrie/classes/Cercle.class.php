<?php

namespace classes;

class Cercle extends FormeGeometrique
{
    public function calculateArea(float $lenght)
    {
        return 3.14 * 2 * $lenght;
    }
}