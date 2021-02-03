<?php

function accum($s)
{
    $pole = str_split($s);
    $string = [];
    $pocet = 0;
    foreach ($pole as $pismeno)
    {
        $result = [];
        for ($i = 0; $i <= $pocet; $i++)
        {
            if ($i==0)
                $result[] = mb_strtoupper($pismeno);
            else
                $result[] = mb_strtolower($pismeno);
            $text = implode($result);
        }
        $string[] = $text . '-';
        $pocet++;
    }
    $result = implode($string);
    $len = strlen($result);
    return substr($result,0,$len-1);
}

echo (accum('ZpglnRxqenU'));
echo('<br>');
echo('Z-Pp-Ggg-Llll-Nnnnn-Rrrrrr-Xxxxxxx-Qqqqqqqq-Eeeeeeeee-Nnnnnnnnnn-Uuuuuuuuuuu');

function accumw($s)
{
    $strArray = str_split($s);
    $string = [];
    $number = 0;
    foreach ($strArray as $letter)
    {
        $result = [];
        for ($i = 0; $i <= $number; $i++)
        {
            if ($i==0)
                $result[] = mb_strtoupper($pismeno);
            else
                $result[] = mb_strtolower($pismeno);
            $text = implode($result);
        }
        $string[] = $text . '-';
        $number++;
    }
    $result = implode($string);
    $len = strlen($result);
    return substr($result,0,$len-1);
}