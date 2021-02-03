<?php

function getMiddle($text)
{
    $len = strlen($text);
    if ($len == 1)
        return $text;
    else
    {
        if ($len % 2 == 0)
            return substr($text, $len / 2 - 1, 2);
        else
            return substr($text, floor($len / 2), 1);
    }
}

echo(getMiddle('testing'));