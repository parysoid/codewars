<?php

function factorial(int $n)
{
    if ($n < 0 || $n > 12)
        throw new RangeException;
    if ($n == 0)
        return 1;
    return $n * factorial($n - 1);
}
echo factorial(5);

