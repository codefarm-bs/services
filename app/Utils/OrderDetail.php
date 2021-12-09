<?php

namespace App\Utils;

class OrderDetail
{
    private PaymentGatewayInterface $paymentGateway;

    public function __construct(PaymentGatewayInterface $paymentGateway)
    {
        $this->paymentGateway = $paymentGateway;
    }

    public function order(int $discount = 0): array
    {
        return [
            'product_id' => '123',
            'discount' => $discount,
            'cash' => $this->paymentGateway->amount - $discount
        ];
    }
}
