<?php
function grow(array $a): int
{
    $limit = count($a);
    $res = $a[0];
    for ($i = 0; $i < $limit; $i++)
    {
        if (isset($a[$i + 1]))
            $res *= $a[$i + 1];
    }
    return $res;
}

echo(grow([2, 2, 2, 2, 2, 2]));
