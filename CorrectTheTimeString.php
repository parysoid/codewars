<?php

function timeCorrect($timestring)
{
    $reg = '/^[0-9]{2}:[0-9]{2}:[0-9]{2}$/';
    if ($timestring === '')
        return '';
    if ($timestring === null)
        return null;
    if (preg_match($reg, $timestring))
    {
        $arr = explode(':', $timestring);
        if ($arr[2] > 59)
        {
            $arr[1] += 1;
            $num = $arr[2] - 60;
            $arr[2] = sprintf('%02d', $num);
        }
        if ($arr[1] > 59)
        {
            $arr[0] += 1;
            $num = $arr[1] - 60;
            $arr[1] = sprintf('%02d', $num);
        }
        if ($arr[0] > 23)
        {
            $num = $arr[0] % 24;
            $arr[0] = sprintf('%02d', $num);
        }
        return implode(':', $arr);
    }
    else
    {
        return null;
    }
}

var_dump(timeCorrect('52:01:01'));