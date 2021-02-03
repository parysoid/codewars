<?php

function smallestInteger ($arr)
{
    sort($arr);
    return $arr[0];
}

echo (smallestInteger([3, 5, 10, 1, 4, 55]));


