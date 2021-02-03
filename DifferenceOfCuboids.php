<?php

function findDifference(array $a, array $b): int
{
    $resA = 1;
    $resB = 1;
    for ($i = 0; $i < 3; $i++)
    {
        $resA = $resA * $a[$i];
        $resB = $resB * $b[$i];
    }

    return abs($resA - $resB);
}

echo(findDifference([9, 7, 2], [5, 2, 2]));
