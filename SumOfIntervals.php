<?php

function sum_intervals(array $intervals) {
return $intervals;
}

print_r (sum_intervals([
    [1,5],
    [10, 20],
    [1, 6],
    [16, 19],
    [5, 11]]
));















/**
function sum_intervalsxx(array $intervals): int {
    foreach ($intervals as &$interval)
    {   $result = max($interval) - min($interval);
        $interval = max($interval) - min($interval);
    }
    return array_sum($intervals) - 1;
}

function sum_intervalsxx(array $intervals): int {
    foreach ($intervals as &$interval)
    {   $interval = max($interval) - min($interval);
        $interval = max($interval) - min($interval);
    }
    return array_sum($intervals) - 1;
}

echo sum_intervals([
        [1,4],
        [7, 10],
        [3, 5]
    ]
);
 */
