<?php

$operationPriority = [
    '+' => 1,
    '-' => 1,
    '*' => 2,
    '/' => 2,
];

$expression = "3+5*2-6/3";
$expressionArray = str_split($expression);

$stek = [];

foreach ($expressionArray as $val) {
    if (is_numeric($val)) {
        $stek[] = $val;
    }
}

foreach ($expressionArray as $operation) {
    if (in_array($expression, $operationPriority)) {

    }
}
