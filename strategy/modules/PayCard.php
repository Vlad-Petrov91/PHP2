<?php

include "./strategy/modules/strategy/QiwiPayment.php";
include "./strategy/modules/strategy/WebMoneyPayment.php";
include "./strategy/modules/strategy/YandexPayment.php";

class PayCard
{

    public $totalSum;
    public $phone;
    protected IPaymentStrategy $method;

    public function __construct(IPaymentStrategy $method, float $totalSum, int $phone)
    {
        $this->totalSum = $totalSum;
        $this->phone = $phone;
        $this->method = $method;
    }


    public function pay($totalSum, $phone)
    {
        $this->method->pay($totalSum, $phone);
    }
}
