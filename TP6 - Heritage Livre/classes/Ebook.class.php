<?php

namespace classes;

class Ebook extends Livre
{
  public string $format;

  public function __construct(string $titre, string $auteur, int $anneePublication, string $format)
  {
      parent::__construct($titre, $auteur, $anneePublication);
      $this->format = $format;
  }

    public function displayInfos(): void{
        echo "
       ______________\n
       Titre: {$this->titre}\n
       Auteur: {$this->auteur}\n
       Année de Publication: {$this->anneePublication}\n
       Format: {$this->format}\n
       ";
    }
}