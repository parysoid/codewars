<?php

print_r((pipeFix([-1,0,1,2,3,4])));

function pipeFix(array $numbers): array
{
    $result = [];
    $index = 0;
    $min = min($numbers);
    for ($i = min($numbers); $i <= max($numbers); $i++)
    {
        $result[$index] = $min;
        $index++;
        $min++;
    }
    return $result;
}


/**
function pipeFix(array $numbers): array
{
    $result = [];
    $index = 0;
    for ($i = min($numbers); $i <= max($numbers); $i++)
    {
        $cislo = $i;
        if ($numbers[0] < 0)
        {
            if (empty($result[$i]))
            {
                if ($index == 1)
                {
                    $result[$index] = $i-1;
                    $index++;

                }
                if ($index >=2)
                {
                    $result[$index] = $i;
                    $index++;
                }
                $result[$index] = $i-1;
                $index++;
            }
        }
        else
        {
            $result[$index] = $i;
            $index++;
        }
    }
    return $result;
}
*/

/**
 * $cisla = [$cisla];
 * $srov = sort($cisla);
 * foreach ($cisla as $number)
 * {
 * $cisla[$number] = $number;
 * var_dump($number);
 * }
 * var_dump();
 *
 * $x = array_flip($numbers);
 * var_dump($x);
 * echo ('<br>');
 *
 */
