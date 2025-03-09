<?php
$numbers = [1, 9, -3, 8, -5, 0, 3, 4, 6, -7];

$negativeCounter = 0;
$positiveCounter = 0;
$zeroCounter = 0;
foreach ($numbers as $number) {
    if ($number < 0) {
        $negativeCounter++;
    } elseif ($number > 0) {
        $positiveCounter++;
    } else {
        $zeroCounter++;
    }
}

echo "Cantidad de positivos: $positiveCounter <br/>";
echo "Cantidad de negativos: $negativeCounter <br/>";
echo "Cantidad de ceros: $zeroCounter";
