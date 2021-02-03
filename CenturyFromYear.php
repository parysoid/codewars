<?php

function centuryFromYear($year)
{
    $res = '';
    if ($year %100 == 0)
        $res = $year;
    else
        $res = $year + 100;
    $len = strlen($res);
    return (int) substr($res,0,$len - 2);
}

echo (centuryFromYear(1900));

/**
 * $str = (string) $year;

if (substr($str,2,3) == '00')
return (int) substr($str,0,strlen($str) - 2);
else
$year = $year + 100;
return (int) substr((string) $year,0,strlen($str) - 2);
 */