<?php

interface IPaymentStrategy
{
    public $totalSum;
    public $phone;
    public function pay(float $totalSum, int $phone);
}
