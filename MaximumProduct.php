<?php

function adjacentElementsProduct(array $array): int
{
    $res = [];
    for ($i = 0; $i < count($array); $i++)
    {
            $res[] = $array[$i + 1] * $array[$i];
    }
    return max($res);
}

echo(adjacentElementsProduct([9, 5, 10, 2, 24, -1, -48]));

