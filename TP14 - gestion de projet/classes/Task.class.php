<?php

namespace classes;

abstract class Task
{
    private int $id;
    private string $title;
    private Developer $assignedTo;
    private bool $isCompleted;

    public function __construct(int $id, string $title, Developer $assignedTo, bool $isCompleted)
    {
        $this->id = $id;
        $this->title = $title;
        $this->assignedTo = $assignedTo;
        $this->isCompleted = $isCompleted;
    }

    public function completeTask(): void
    {
        $this->isCompleted = true;
    }

    public function isCompleted(): bool
    {
        return $this->isCompleted;
    }
}