<?php

namespace classes;

use DateTime;

class Project
{
    private int $id;
    private string $name;
    private string $clientName;
    private DateTime $startDate;
    private DateTime|null $endDate;

    private array $tasks;

    public function __construct(string $name, string $clientName, DateTime $startDate, DateTime $endDate, array $tasks)
    {
        $this->name = $name;
        $this->clientName = $clientName;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->tasks = $tasks;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getClientName(): string
    {
        return $this->clientName;
    }

    public function addTask(Task $task)
    {
        $this->tasks[] = $task;
    }

    public function getTasksById(int $id): Task
    {
        return $this->tasks[$id];
    }

    public function getAdvancement(): float
    {
        return 0.0; // TODO
    }
}