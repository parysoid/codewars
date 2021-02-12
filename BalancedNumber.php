<?php

function balancedNum($num): string
{
    $arr = str_split((string)$num);
    $count = count($arr);
    $sumLeft = 0;
    $sumRight = 0;
    if ($count === 1 || $count === 2)
    {
        return 'Balanced';
    }

    if ($count % 2 === 0)
    {
        $half = $count / 2 - 1;
        for ($i = 0; $i < $count; $i++)
        {
            if ($i < $half && $i < $half +1)
                $sumLeft += $arr[$i];
            if ($i > $half && $i > $half +1)
                $sumRight += $arr[$i];
        }
        $res = ($sumLeft === $sumRight) ? 'Balanced' : 'Not Balanced';
    }
    else
    {
        $half = floor($count % 2);
        for ($i = 0; $i < $count; $i++)
        {
            if ($i < $half)
                $sumLeft += $arr[$i];
            if ($i > $half)
                $sumRight += $arr[$i];
        }
        $res = ($sumLeft === $sumRight) ? 'Balanced' : 'Not Balanced';
    }
    return $res;
}
echo (balancedNum(1230987));
