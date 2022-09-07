<?php

//quickSort 0 мин 12 сек 59518 мсек
//sort 0 мин 0 сек 219117 мсек
//heapSort 0 мин 0 сек 13 мсек
//bubbleSort недождался, больше 20 мин

include "./createArray.php";
include "./bubbleSort.php";
include "./quickSort.php";
include "./heapSort.php";
include "./shakerSort.php";

$array = createArray();
$startLaunch = date_create('now');
quickSort($array, 0, count($array) - 1);
$endLaunch = date_create('now');
$interval = date_diff($startLaunch, $endLaunch);
echo 'quickSort ' . $interval->format('%i мин %s сек %f мсек') . PHP_EOL;

$array = createArray();
$startLaunch = date_create('now');
sort($array);
$endLaunch = date_create('now');
$interval = date_diff($startLaunch, $endLaunch);
echo 'sort ' . $interval->format('%i мин %s сек %f мсек') . PHP_EOL;

$array = createArray();
$startLaunch = date_create('now');
heapSort($array);
$endLaunch = date_create('now');
$interval = date_diff($startLaunch, $endLaunch);
echo 'heapSort ' . $interval->format('%i мин %s сек %f мсек') . PHP_EOL;

$array = createArray();
$startLaunch = date_create('now');
bubbleSort($array);
$endLaunch = date_create('now');
$interval = date_diff($startLaunch, $endLaunch);
echo 'bubbleSort ' . $interval->format('%i мин %s сек %f мсек') . PHP_EOL;

$array = createArray();
$startLaunch = date_create('now');
shakerSort($array);
$endLaunch = date_create('now');
$interval = date_diff($startLaunch, $endLaunch);
echo 'shakerSort ' . $interval->format('%i мин %s сек %f мсек') . PHP_EOL;
