<?php

namespace App\Utils;

class MellatPaymentGateway implements PaymentGatewayInterface
{
    public function charge(int $amount)
    {
        dd('mellat charging...');
    }
}
