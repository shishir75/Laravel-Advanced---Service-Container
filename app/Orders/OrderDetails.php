<?php


namespace App\Orders;


use App\Billing\PaymentGateway;

class OrderDetails
{

    private $paymentGateway;

    public function __construct(PaymentGateway $paymentGateway)
    {
        $this->paymentGateway = $paymentGateway;
    }

    public function all()
    {
        $this->paymentGateway->setDiscount(500);

        return [
          'name' => 'Shishir Sarder',
          'address' => '309, RTH, JU, Dhaka-1342',
        ];
    }


}