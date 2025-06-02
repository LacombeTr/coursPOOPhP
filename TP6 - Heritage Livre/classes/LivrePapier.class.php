<?php

namespace classes;

class LivrePapier extends Livre
{
    public int $pageNumber;

    public function __construct(string $titre, string $auteur, int $anneePublication, int $pageNumber)
    {
        parent::__construct($titre, $auteur, $anneePublication);
        $this->pageNumber = $pageNumber;
    }

    public function displayInfos(): void
    {
        echo "
       ______________\n
       Titre: {$this->titre}\n
       Auteur: {$this->auteur}\n
       Année de Publication: {$this->anneePublication}\n
       Nombre de Pages: {$this->pageNumber}\n
       ";
    }
}