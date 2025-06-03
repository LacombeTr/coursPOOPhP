<?php

namespace classes;

abstract class Payment
{
    private float $amount;

    public function __construct(float $amount){
        $this->amount = $amount;
    }

    abstract public function pay();

    public function displayAmount(): void{
        echo "Montant à payer: ".$this->amount."euro(s)\n";
    }
}