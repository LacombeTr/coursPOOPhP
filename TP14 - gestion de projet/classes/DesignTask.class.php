<?php

namespace classes;

use enums\tool;

class DesignTask extends Task
{
    private Tool $toolUsed;

    public function __construct(int $id, string $title, Developer $assignedTo, bool $isCompleted, Tool $toolUsed)
    {
        parent::__construct($id, $title, $assignedTo, $isCompleted);
        $this->toolUsed = $toolUsed;
    }
}