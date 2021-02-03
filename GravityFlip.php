<?php

function flip(string $dir, array $arr): array
{
    if (empty($arr))
        return [];
    else
    {
        if ($dir === 'L')
            rsort($arr);
        else
            sort($arr);
        return $arr;
    }
}

print_r(flip('R', [3, 2, 1, 2]));
