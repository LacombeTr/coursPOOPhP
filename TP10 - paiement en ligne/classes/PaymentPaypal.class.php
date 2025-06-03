<?php

namespace classes;

final class PaymentPaypal extends Payment
{
    public function __construct(float $amount)
    {
        parent::__construct($amount);
    }

    public function pay()
    {
        echo "Paiement par PayPal effectué !\n";
    }
}