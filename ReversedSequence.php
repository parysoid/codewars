<?php
function reverseSeq($n)
{
    if ($n > 0)
    {
        $arr = range(1, $n);
        rsort($arr);
        return $arr;
    }
    return null;
}

;

print_r(reverseSeq(5));

