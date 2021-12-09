<?php

namespace App\Utils;

class MeliPaymentGateway implements PaymentGatewayInterface
{
    public $key;
    public $amount;

    public function __construct($key)
    {
        $this->key = $key;
        $this->amount = 0;
    }

    public function charge(int $amount)
    {
        $this->amount = $amount;
    }
}
