<?php

function dirReduc(array $arr): array
{
    $x = count($arr);
    $last = '';
    $result = [];
    for ($i = 0; $i < $x; $i++)
    {
        if ($arr[$i] == 'EAST' && $last != 'WEST')
            $res[] = $arr[$i];
        if ($arr[$i] == 'WEST' && $last != 'EAST')
            $res[] = $arr[$i];
        if ($arr[$i] == 'NORTH' && $last != 'SOUTH')
            $res[] = $arr[$i];
        if ($arr[$i] == 'SOUTH' && $last != 'NORTH')
            $res[] = $arr[$i];
        $last = $arr[$i];
        echo $last . ' ';
    }
    return $result;

}
/**
    $x = 0;
    $y = 0;
    $res = [];
    foreach ($arr as $ar)
    {
        if ($ar == 'NORTH')
            $y++;
        elseif ($ar == 'SOUTH')
            $y--;
        elseif ($ar == 'EAST')
            $x++;
        elseif ($ar)
            $x--;
    }
    $sum = abs($x) + abs($y);
    for ($i = 0; $i < $sum; $i++)
    {
        if ($x > 0)
            $res[] = 'EAST';
        else
            $res[] = 'WEST';
        if ($y > 0)
            $res[] = 'NORTH';
        else
            $res[] = 'SOUTH';
    }
    return $res;
    /**
    for ($i = 0; $i < abs($y); $i++)
    {

    }

    /**
     * if ($x == 0 && $y == 0)
     * return [];
     * if ($x > 0)
     * $res[] = str_repeat('EAST',$x);
     * else
     * $res[] = str_repeat('WEST',abs($x));
     * if ($y > 0)
     * $res[] = str_repeat('NORTH',$y);
     * else
     * $res[] = str_repeat('SOUTH',abs($y));
     * return $res;
     */


print_r(dirReduc(["NORTH", "SOUTH", "SOUTH", "EAST", "WEST", "NORTH", "WEST"]));
