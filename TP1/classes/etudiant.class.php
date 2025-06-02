<?php

namespace classes;
class Etudiant
{
    public string $name;
    public int $age;
    public array $notes = [];

    public function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function addNote(float $note)
    {
        $this->notes[] = $note;
    }

    public function getNotes()
    {
        return $this->notes;
    }

    public function calculateMean()
    {
        return array_sum($this->notes) / count($this->notes);
    }

    private function displayNotesDetails()
    {
        $details = "";
        foreach ($this->notes as $note) {
            $details = "{$details}\n   {$note}";
        }

        return $details;
    }

    public function getInfos()
    {
        echo "
__________________\n
Nom: {$this->name} \n
Age: {$this->age} \n
Moyenne: {$this->calculateMean()}/20\n
Détails des notes: {$this->displayNotesDetails()}\n
";
    }
}