<?php

function countBy($x, $n): array
{
    $res = [];
    for ($i = 1; $i <= $n; $i++)
    {
        $res[] = $i * $x;
    }

    return $res;
}

print_r(countBy(2,5));