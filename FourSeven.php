<?php

function solution($n)
{
    $hodnota = intval($n) / 2;
    $pole = [
        0 => 0,
        1 => 0,
        2 => 7,
        3 => 0,
        3.5 => 4,
    ];

    for ($i = 4; $i < 100; $i++)
    {
        $pole[$i] = 0;
    }
    return $pole[$hodnota];
}

echo(solution(17.5));