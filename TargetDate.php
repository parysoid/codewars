<?php
function dateNbDays($a0, $a, $p)
{
    $start = new DateTime('1.1.2016');
    $pDay = $p / 36000;
    $days = 0;
    while($a0 < $a)
    {
        $a0 += ($a0 * $pDay);
        $days++;
    }
    $x = DateInterval::createFromDateString($days . ' days');
    $start->add($x);
    return $start->format('Y-m-d');
}

print_r(dateNbDays(9999, 11427, 6));
