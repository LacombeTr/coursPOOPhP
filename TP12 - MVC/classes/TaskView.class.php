<?php

namespace classes;
class TaskView
{
    public function displayTasks(array $taskList)
    {

        $table = '<table><thead><tr><th>Nom tache</th><th>Description tache</th></tr></thead><tbody>';

        foreach ($taskList as $task) {
            $table .= '<tr><td>' . $task['name'] . '</td><td>' . $task['desc'] . '</td></tr>';
        }

        $table .= '</tbody></table>';

        return $table;
    }
}