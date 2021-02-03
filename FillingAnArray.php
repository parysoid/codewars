<?php

function arr($n = 0): array
{

    $result = [];
    if ($n > 0)
        return $result = range(0, $n - 1);
    else
        return [];

}


/**
 * $m = 0;
 * $m = $n;
 * if (empty($m) == true)
 * {
 * $m = 0;
 * return $result = [];
 *
 * }
 * if ($m > 0)
 * return $result = range(0, abs($m - 1));
 * if ($m == 0)
 * return $result = [];
 * return $result = [];
 */
