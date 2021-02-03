<?php

function duplicate_encode($word){
    $len = strlen($word);
    $res = [];
    echo (strtolower($word)) . '<br>';
    $arr = str_split(strtolower($word));
    foreach ($arr as $ar)
    {
        echo ($ar) . '<br>';
        if(substr_count(strtolower($word),$ar,0,$len) > 1)
            $res[] = ')';
        else
            $res[] = '(';
    }
    return implode($res);
}
echo (duplicate_encode('dinrecedesuccesscodewarriorsupralapsarian'));












function duplicate_encode2(string $word)
{
    $letters = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z',];
    $result = [];
    $len = strlen($word);
    for ($i = 0; $i < $len; $i++)
    {
        foreach ($letters as $letter)
        {
            $count = 0;
            if (substr_count($word, $letter, 0, $len) > 1)
                $count++;
            elseif (substr_count($word, $letter, 0, $len) == 1)
                $count++;
            if ($count == 1)
                $result[] = '(';
            else
                $result[] = ')';
        }
    }
    echo (string)implode($result);
}


