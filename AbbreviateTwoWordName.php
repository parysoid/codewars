<?php

function abbrevName(string $name)
{
    $arr =  explode(' ',$name);
    foreach ($arr as &$ar)
    {
        $ar = strtoupper(substr($ar,0,1));
    }
    return implode(('.'),$arr);
}

echo (abbrevName("Sam Harris"));