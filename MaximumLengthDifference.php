<?php

function mxdiflg(array $a1, array $a2): int
{
    if (empty($a1) || empty($a2))
        return -1;
    $res = 0;
    foreach ($a1 as $string1)
    {

        foreach ($a2 as $string2)
        {
            $diff = abs(strlen($string1) - strlen($string2));
            if ($diff > $res)
                $res = $diff;
        }
    }
    return $res;
}

print_r(mxdiflg(["hoqq", "bbllkw", "oox", "ejjuyyy", "plmiis", "xxxzgpsssa", "xxwwkktt", "znnnnfqknaz", "qqquuhii", "dvvvwz"],["cccooommaaqqoxii", "gggqaffhhh", "tttoowwwmmww"]));
