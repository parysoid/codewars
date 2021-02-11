<?php
function findDeletedNumber(array $arr, array $mixedArr): int
{
    foreach ($arr as $num)
    {
        if(in_array($num,$mixedArr) === false)
            return $num;
    }
    return 0;
}

echo findDeletedNumber([1,2,3,4,5,6,7,8,9], [3,2,4,6,7,8,1,9]);