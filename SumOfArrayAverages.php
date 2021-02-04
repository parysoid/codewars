<?php
function sumAverage(array $arr): int
{
    $average = 0;
    foreach ($arr as $ar)
    {
        $count = count($ar);
        $sum = array_sum($ar);
        $average += $sum / $count;
    }
    return floor($average);
}

print_r(sumAverage([[3, 4, 1, 3, 5, 1, 4], [21, 54, 33, 21, 76]]));
