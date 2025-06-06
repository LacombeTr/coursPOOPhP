<?php

namespace classes;

class ChienView
{
    public function displayDogInfos(Chien $dog)
    {
        return '
        <div>
            <h1>' . $dog->getName() . '</h1>
            <p><span class="charcteristic">Age: </span> $dog->getAge()</p>
            <p><span class="charcteristic">Race: </span> $dog->getRace()</p>
            <p><span class="charcteristic">Couleur: </span> $dog->getColor()</p>
            <p><span class="charcteristic">Sexe: </span> $dog->getGender()</p>
            <p><span class="charcteristic">Poids: </span> $dog->getWeight()</p>
        </div>
                ';
    }
}

Créez une vue listeChiensView pour afficher la liste des chiens et une vue chienView pour
afficher les détails d'un chien.
Utilisez le contrôleur pour charger les chiens depuis la session et affichez-les dans la vue de
liste. Permettez également de cliquer sur un chien pour afficher ses détails dans la vue de
détail. Implémentez des formulaires pour créer, mettre à jour des chiens ainsi qu'un bouton
pour supprimer des chiens.