<?php

include "../../interfaces/IPaymentStrategy.php";


class YandexPayment implements IPaymentStrategy
{
    public $totalSum;
    public $phone;

    public function __construct($totalSum, $phone)
    {
        $this->totalSum = $totalSum;
        $this->phone = $phone;
    }

    public function pay($totalSum, $phone)
    {
    }
}
