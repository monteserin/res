<?php
function getLastElement($arr)
{
    return $arr[count($arr) - 1];
}

$lastElement = getLastElement([1, 2, 3, 4, 5]);

echo $lastElement;
