<?php

$numbers = [1, 9, -3, 8, -5, 0, 3, 4, 6, -7];


$positivesSum = 0;
$positivesCount = 0;

$negativesSum = 0;
$negativesCount = 0;

for ($i = 0; $i < count($numbers); $i++) {
    if ($numbers[$i] > 0) {
        $positivesSum += $numbers[$i];
        $positivesCount++;
    } else if ($numbers[$i] < 0) {
        $negativesSum += $numbers[$i];
        $negativesCount++;
    }
}

$positivesAverage = $positivesSum / $positivesCount;
$negativesAverage = $negativesSum / $negativesCount;

echo "Positives average: $positivesAverage <br>";
echo "Negatives average: $negativesAverage <br>";
