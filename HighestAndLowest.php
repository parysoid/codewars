<?php

function highAndLow(string $numbers)
{

    $numbers = explode(' ',$numbers);
    sort($numbers);
    $lowestNumber = $numbers[0];
    $highestNumber = $numbers[count($numbers)-1];
    return $highestNumber . ' ' . $lowestNumber;
}

echo (highAndLow('8 3 -5 42 -1 0 0 -9 4 7 4 -4'));

function highAndLow2($numbers) {
    $a = explode(' ', $numbers);
    return max($a) . " " . min($a);
}
