<?php

function summation($n): int
{
    return array_sum(range(1,$n));
}

echo (summation(5));
