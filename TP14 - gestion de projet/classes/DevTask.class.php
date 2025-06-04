<?php

namespace classes;

use interfaces\Billeable;

class DevTask extends Task implements Billeable
{
    private float $estimatedHours;
    private float $cost = 50;

    public function __construct(int $id, string $title, Developer $assignedTo, float $estimatedHours, bool $isCompleted)
    {
        parent::__construct($id, $title, $assignedTo, $isCompleted);
        $this->estimatedHours = $estimatedHours;
    }

    public function calculateAmount(): float
    {
        return $this->estimatedHours * $this->cost;
    }
}