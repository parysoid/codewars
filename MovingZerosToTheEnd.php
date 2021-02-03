<?php

function moveZeros(array $items)
{
    $arrZero = [];
    $arrRest = [];

    $count = count($items);

    for ($i = 0; $i < $count; $i++)
    {
        if ($items[$i] === 0 || $items[$i] === 0.0)
            array_push($arrZero, $items[$i]);
        else
            array_push($arrRest, $items[$i]);
    }
    return array_merge($arrRest, $arrZero);
}

function moveZeros2(array $items): array
{
    return array_pad(array_filter($items, function ($x) {
        return $x !== 0 and $x !== 0.0;
    }), count($items), 0);
}

/**
 * if (is_string($item))
 * array_push($arrRest, $item);
 * elseif ($item == 0)
 * {
 * array_push($arrZero, $item);
 * }
 * elseif ($item == false)
 * array_push($arrRest, false);
 * elseif ($item == [])
 * array_push($arrRest, []);
 * else
 * {
 * array_push($arrRest, $item);
 * }
 */
/*
 * foreach ($items as $item)
    {
        if ($item != 0)
        {
            array_push($result,$item);
        }
    }
    return $result;
 */

/**
 *  foreach ($items as $item)
 * {
 * if ($item != 0)
 * {
 * array_push($result,$item);
 * }
 * }
 * foreach ($items as $item)
 * {
 * if ($item == 0)
 * array_push($result,$item);
 * }
 * return implode(',',$result);
 */


print_r(moveZeros(["a", 0, 0, "b", null, "c", "d", 0, 1, false, 0, 1, 0, 3, [], 0, 1, 9, 0, 0, 0, 0, 9]));
echo('<br>');
echo('"a","b",null,"c","d",1,false,1,3,[],1,9,9,0,0,0,0,0,0,0,0,0,0');