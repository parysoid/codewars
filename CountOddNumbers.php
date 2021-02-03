<?php

function oddCount($n)
{
     return floor($n/2);
}



function nthEven($n) {
    return $n * 2 - 2;
}

echo(nthEven(100));
