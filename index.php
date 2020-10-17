<?php

function maxInArray2D($array)
{
    $max = $array[0][0];
    $arrayLength = count($array);
    for ($x = 1; $x < $arrayLength; $x++) {
        for ($y = 1; $y < count($array[$x]); $y++) {
            if ($max < $array[$x][$y]) {
                $max = $array[$x][$y];
            }
        }
    }
    return $max;
}

echo maxInArray2D([[1, 2, 3], [4, 5, 6], [3, 6, 7]]);