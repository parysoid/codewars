<?php

function repeatStr($n, $str)
{
    $result = [];
    for ($i = 0; $i < $n; $i++)
    {
        $result[$i] = $str;
    }
    return implode($result);
}

echo(repeatStr(5, 'ahoj'));