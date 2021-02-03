<?php

function solve(array $arr): array
{
    $n = count($arr);
    $alpha = range('A', 'Z');
    $alphabet = array_flip($alpha);
    $result = [];
    for ($i = 0; $i < $n; $i++)
    {
        $count = 0;
        $letters = str_split(strtoupper($arr[$i]));
        foreach ($letters as $pos => $value)
        {
            if ($pos == $alphabet[$value])
                $count++;
        }
        $result[$i] = $count;
    }
    return $result;
}


print_r(solve([]));

