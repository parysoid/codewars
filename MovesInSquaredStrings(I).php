<?php
function vertMirror($s)
{
    // your code
}

function horMirror($s)
{
    //$x = strpos($s,' ');
    $x = stripcslashes($s);
    echo $x;
    $arr = str_split($s,5);
    krsort($arr);
    return $arr;
}

function oper($fct, $s)
{
    // your code
}

print_r(horMirror("lVHt\nJVhv\nCSbg\nyeCt"));
