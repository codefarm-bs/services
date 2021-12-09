<?php

namespace App\Utils;

interface PaymentGatewayInterface
{
    public function charge(int $amount);
}
