<?php

$payService = new PayCard(
    new QiwiPayment()
);

$payService->pay(88, 313);
