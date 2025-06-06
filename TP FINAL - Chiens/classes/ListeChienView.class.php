<?php

namespace classes;

use Classes\Chien;

class ListeChienView
{
    private Chien $selectedDog;



    public function displayDogList(array $dogList)
    {
        $dogListComponent = '
                            <table>
                                <thead>
                                    <tr>
                                        <th>Nom</th><th>Age</th><th>Race</th><th>Couleur</th><th>Sexe</th><th>Poids</th>                 
                                    </tr>
                                </thead ><tbody>';
        foreach ($dogList as $dog) {
            $dogListComponent .= "<tr>
                                    <td>{$dog->getName()}</td>
                                    <td>{$dog->getAge()}</td>
                                    <td>{$dog->getRace()}</td>
                                    <td>{$dog->getColor()}</td>    
                                    <td>{$dog->getGender()}</td>
                                    <td>{$dog->getWeight()}</td>
                                </tr>";
        }

        return $dogListComponent . '</tbody></table>';
    }
}