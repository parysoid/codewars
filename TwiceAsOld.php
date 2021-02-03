<?php

function twice_as_old($dad_years_old, $son_years_old): int
{
    if ($son_years_old == 0)
        return $dad_years_old;
    $x = $dad_years_old - $son_years_old;
    return abs($x - $son_years_old);

    /**
     * $count = 0;
     * $past = $dad_years_old - $son_years_old;
     *
     * if ($dad_years_old /2 == $son_years_old)
     * return 0;
     * if ($dad_years_old /2 > $son_years_old)
     * return $son_years_old - $past;
     * else
     * while ($dad_years_old /2 > $son_years_old)
     * {
     * $dad_years_old++;
     * $son_years_old++;
     * $count++;
     *
     * }
     * return $count;
     */

}


echo(twice_as_old(55, 30));