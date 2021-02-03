<?php
function invert(array $a): array
{
    $len = count($a);
    for ($i = 0; $i < $len; $i++)
    {
        $a[$i] = $a[$i] * -1;
    }
    return $a;
}

var_dump(invert([1, 2, 3, 4, 5]));
