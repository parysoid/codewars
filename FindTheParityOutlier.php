<?php

function find(array $integers)
{
    foreach ($integers as $integer)
    {
        if ($integer % 2 == 0)
            $even[] = $integer;
        else
            $odd[] = $integer;
    }
    if (count($even) > 1 && $odd > 0)
        return $odd[0];
    else
        return $even[0];
}

echo(find([100, 101, 102]));
