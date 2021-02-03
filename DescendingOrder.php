<?php

function descendingOrder(int $n): int
{
    $text = strval($n);
    $len = strlen($text);
    for ($i = 0; $i < $len; $i++)
    {
        $numbers[] = substr($text, $i, 1);
    }
    rsort($numbers);
    return (int)implode($numbers);
}


function descendingOrder2(int $n): int
{
    $arrayNumber = str_split($n);
    arsort($arrayNumber);
    return (int)implode($arrayNumber);
}

echo(descendingOrder(123456789));