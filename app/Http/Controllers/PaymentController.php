<?php

namespace App\Http\Controllers;

use App\Utils\OrderDetail;
use App\Utils\PaymentGatewayInterface;

class PaymentController extends Controller
{
    private PaymentGatewayInterface $paymentGateway;

    public function __construct(PaymentGatewayInterface $paymentGateway)
    {
        $this->paymentGateway = $paymentGateway;
    }

    public function store(OrderDetail $order)
    {
        $this->paymentGateway->charge(100000);

        dd($order->order(100));
    }
}
