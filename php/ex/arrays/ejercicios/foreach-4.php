<?php

$numbers = [1, 9, -3, 8, -5, 0, 3, 4, 6, -7];


$negativeCounter = 0;
$negativeSum = 0;

$positiveCounter = 0;
$positiveSum = 0;
foreach ($numbers as $number) {
    if ($number < 0) {
        $negativeCounter++;
        $negativeSum += $number;
    } else if ($number > 0) {
        $positiveCounter++;
        $positiveSum += $number;
    }
}

$positiveAverage = $positiveSum / $positiveCounter;
$negativeAverage = $negativeSum / $negativeCounter;

echo "Promedio de positivos: $positiveAverage <br/>";
echo "Promedio de negativos: $negativeAverage <br/>";
