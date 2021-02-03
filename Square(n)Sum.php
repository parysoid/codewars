<?php
function square_sum($numbers)
{
    foreach ($numbers as &$number)
    {
        $number = $number * $number;
    }
    return array_sum($numbers);
}

echo (square_sum([0, 3, 4, 5]));