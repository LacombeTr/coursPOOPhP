<?php

namespace classes;

class Livre
{
   public string $titre;
   public string $auteur;
   public int $annePublication;

   public function __construct(string $titre, string $auteur, int $anneePublication)
   {
       $this->titre = $titre;
       $this->auteur = $auteur;
       $this->anneePublication = $anneePublication;
   }

   public function displayInfos(): void{
       echo "
       ______________\n
       Titre: {$this->titre}\n
       Auteur: {$this->auteur}\n
       Année de Publication: {$this->anneePublication}\n
       ";
   }
}