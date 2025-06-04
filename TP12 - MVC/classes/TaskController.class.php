<?php

namespace classes;
class TaskController
{
    private array $taskList = array();

    /** Ajoute une nouvelle tâche.
     * @param string $name
     * @param string $description
     * @return void
     */
    public function addTask(string $name, string $description): void
    {
        $this->taskList[] = array(
            "name" => $name,
            "desc" => $description
        );
    }

    /** Récupere la liste des taches
     * @return array
     */
    public function getTaskList(): array
    {
        return $this->taskList;
    }

    public function getTaskById(int $id)
    {
        if (!array_key_exists($id, $this->taskList)) {
            return $this->taskList[$id];
        } else {
            throw new InvalidArgumentException("Task with id {$id} does not exists");
        }
    }
}