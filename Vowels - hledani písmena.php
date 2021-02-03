<?php

function getCount($str)
{
    $len = strlen($str);
    $vowelsCount = 0;
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    $string = str_split($str);
    var_dump($string);
    for ($i = 0; $i < $len; $i++)
    {
        for ($k = 0; $k < 5; $k++)
        {
            if ($string[$i] == $vowels[$k])
            {
                $vowelsCount++;
            }
        }
    }
    return $vowelsCount;
}

function getCount2($str) {
    $vowelsCount = 0;
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    // enter your magic here
    foreach($vowels as $vowel) {
        $vowelsCount += substr_count($str, $vowel);
    }


    return $vowelsCount;
}

echo(getCount('abracadabra'));
