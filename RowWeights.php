<?php

function rowWeights(array $arr): array
{
    $team1 = 0;
    $team2 = 0;
    for ($i = 0; $i < count($arr); $i++)
    {
        if ($i % 2 !== 0)
            $team2 += $arr[$i];
        else
            $team1 += $arr[$i];
    }
    return [$team1, $team2];
}

print_r(rowWeights([29, 83, 67, 53, 19, 28, 96]));