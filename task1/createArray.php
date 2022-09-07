<?php

function createArray()
{
    $taskArray = [];
    for ($i = 1; $i <= 1000000; $i++) {
        $taskArray[] = rand(1, 15);
    }
    return $taskArray;
}
