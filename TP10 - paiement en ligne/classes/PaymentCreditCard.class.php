<?php

namespace classes;

final class PaymentCreditCard extends Payment
{
    public function __construct(float $amount)
    {
        parent::__construct($amount);
    }

    public function pay()
    {
        echo "Paiement par carte effectué !\n";
    }
}