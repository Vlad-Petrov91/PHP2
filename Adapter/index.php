<?php

$square = (new SquareAreaAdapter())->squareArea(2);
echo $square . "<br>";

$circle = (new CircleAreaAdapter())->circleArea(4);
echo $circle  . "<br>";