<?php

function fold_to($distance) {
    $result = 0;
    $paper = 0.0001;
    while ($paper < $distance)
    {
        $paper = $paper*2;
        $result++;
    }
    return $result;
}

echo fold_to(384000000);