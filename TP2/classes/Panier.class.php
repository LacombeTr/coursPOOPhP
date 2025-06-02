<?php

namespace classes;

class Panier
{
    public array $panier;

    public function __construct(array $panier)
    {
        $this->panier = $panier;
    }

    public function displayPanier()
    {
        foreach ($this->panier as $produit) {
            $produit->getInfos();
        }
    }

    public function calculateTotal()
    {
        $total = 0;

        foreach ($this->panier as $produit) {
            $total = $total + $produit->getPrix();
        }

        return $total;
    }

    public function displayContent()
    {
        $content = [];
        $contentToDisplay = '';

        foreach ($this->panier as $produit) {

            if (isset($content[$produit->getName()])) {
                $content[$produit->getName()] += 1;
            } else {
                $content[$produit->getName()] = 1;
            }
        }

        foreach ($content as $produit => $quantite) {
            $contentToDisplay .= "\n{$produit}: {$quantite}";
        }

        echo $contentToDisplay;
    }
}