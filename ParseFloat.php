<?php

function parseFloat(string $s)
{
    $num = (float) $s;
    if ($num)
        return $num;
    else
        return null;
}

var_dump(parseFloat("234.0234"));