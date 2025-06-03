<?php

namespace classes;

final class PaymentBankTransfer extends Payment
{
    public function __construct(float $amount)
    {
        parent::__construct($amount);
    }

    public function pay()
    {
        echo "Paiement par virement bancaire effectué !\n";
    }
}