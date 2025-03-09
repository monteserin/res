<?php

function setFirstElement($arr, $n)
{
    $arr[0] = $n;
    return $arr;
}

var_dump(setFirstElement([1, 2, 3], 10)); // [10, 2, 3]
