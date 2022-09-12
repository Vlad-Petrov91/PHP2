<?php

function calculateExpression($expression)
{
    $expressionArray = str_split($expression);
    $stack = [];
    $operationStack = [];
    $operationPriority = [
        '+' => 1,
        '-' => 1,
        '*' => 2,
        '/' => 2,
    ];

    function calculate(int $operand1, string $operation, int $operand2): int
    {
        switch ($operation) {
            case '+':
                return $operand1 + $operand2;
            case '-':
                return $operand1 - $operand2;
            case '*':
                return $operand1 * $operand2;
            case '/':
                return $operand1 / $operand2;
            default:
                return "error";
        }
    }

    foreach ($expressionArray as $val) {
        if (is_numeric($val)) {
            $stack[] = intval($val);
        } elseif (array_key_exists($val, $operationPriority)) {
            $operationStack[] = $val;

        }
    }
    for ($i = 0; $i < count($operationStack); $i++) {
        $operand1 = $i;
        $operand2 = $i + 1;
//    var_dump($stack);
//    var_dump($operationStack);

        if ($operationPriority[$operationStack[$i]] == 1) {
            continue;
        } elseif ($operationPriority[$operationStack[$i]] == 2) {
            $answer = calculate($stack[$operand1], $operationStack[$i], $stack[$operand2]);
            // var_dump($stack[$operand1] . $operationStack[$i] . $stack[$operand2] . "=" . $answer . PHP_EOL);
            array_splice($stack, $operand1, 2, $answer);
            array_splice($operationStack, $i, 1);

        }
    }

    while (!empty($operationStack)) {
        $operand1 = 0;
        $operand2 = 1;
        $answer = calculate($stack[$operand1], $operationStack[0], $stack[$operand2]);
        //  var_dump($stack[$operand1] . $operationStack[0] . $stack[$operand2] . "=" . $answer . PHP_EOL);
        array_splice($stack, $operand1, 2, $answer);
        array_splice($operationStack, 0, 1);

    }
    return $stack[0];
}

var_dump(calculateExpression('3+5*2-6/3'));
