<?php

$myArray = [2, 9, 5, 1, 8, 7, 8, 3, 4, 9, 9, 4, 1, 3, 1, 7, 9, 8, 4, 2, 2];
sort($myArray);

function interpolationSearchAndRemove(&$myArray, $num)
{
    $start = 0;
    $last = count($myArray) - 1;
    while (($start <= $last) && ($num >= $myArray[$start])
        && ($num <= $myArray[$last])) {
        $pos = floor($start + (
                (($last - $start) / ($myArray[$last] - $myArray[$start]))
                * ($num - $myArray[$start])
            ));
        if ($myArray[$pos] == $num) {
            return removeElements($myArray, $pos, $num);
        }
        if ($myArray[$pos] < $num) {
            $start = $pos + 1;
        } else {
            $last = $pos - 1;
        }
    }
    return null;
}

function removeElements(&$myArray, $index, $num)
{
    while ($myArray[$index - 1] == $num) {
        $index--;
    }

    $startIndex = $index;
    $cout = 1;
    while ($myArray[++$index] == $num) {
        $cout += 1;
    }
    return array_splice($myArray, $startIndex, $cout);
}

interpolationSearchAndRemove($myArray, 8);


