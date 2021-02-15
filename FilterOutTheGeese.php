<?php
function gooseFilter($birds): array
{
    $geese = ["African", "Roman Tufted", "Toulouse", "Pilgrim", "Steinbacher"];
    $res = [];
    foreach ($birds as $bird)
    {
        if (in_array($bird,$geese,true) !== true)
        {
            $res[] = $bird;
        }
    }
    return $res;
}

print_r(gooseFilter(["Mallard", "Hook Bill", "African", "Crested", "Pilgrim", "Toulouse", "Blue Swedish"]));