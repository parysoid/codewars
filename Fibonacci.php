<?php
function perimeter($n)
{
    $squares = [1, 1];
    for ($i = 2; $i <= $n; $i++)
    {
        $squares[$i] = $squares[$i - 1] + $squares[$i - 2];
    }
    return 4 * array_sum($squares);
}

echo(perimeter(70));
