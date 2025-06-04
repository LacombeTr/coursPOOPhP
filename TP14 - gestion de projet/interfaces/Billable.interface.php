<?php

namespace interfaces;

interface Billeable
{
    public function calculateAmount(): float;
}