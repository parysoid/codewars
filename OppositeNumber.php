<?php
function opposite($n)
{
    if ($n > 0)
    {
        $n -= 2 * $n;
        return $n;
    }
    if ($n < 0)
        $n = abs($n);
    return $n;
}

echo(opposite(1));
echo('<br>');
echo(opposite(14));
echo('<br>');
echo(opposite(-34));
