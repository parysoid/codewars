<?php
function nbDig(int $n, int $d): int
{
    $count = 0;
    for ($i = 0; $i <= $n; $i++)
    {
        $sqr = (string) pow($i,2);
        $arr = str_split($sqr);
        foreach ($arr as $ar)
        {
            if ($ar == $d)
                $count++;
        }
    }
    return $count;
}
function nbDig2(int $n, int $d): int
{
    $count = 0;
    for ($i = 0; $i <= $n; $i++)
    {
        $sqr = (string) pow($i,2);
        if (substr_count($sqr,$d))
            $count += substr_count($sqr,$d);
    }
    return $count;
}
echo (nbDig2(11011, 2));