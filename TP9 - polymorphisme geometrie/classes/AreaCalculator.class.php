<?php

namespace classes;

class AreaCalculator
{
    public function calculateTotalArea(array $shapes): float
    {
        $totalArea = 0;

        foreach ($shapes as $shape) {
            $totalArea += $shape->calculateArea();
        }

        return $totalArea;
    }
}