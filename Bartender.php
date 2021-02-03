<?php

function get_drink_by_profession(string $s): string
{
    $low = strtolower($s);
    $newStr = str_replace('0','o',$low);

    switch ($newStr)
    {
        case 'jabroni':
            return 'Patron Tequila';
        case 'school counselor':
            return 'Anything with Alcohol';
        case 'programmer':
            return 'Hipster Craft Beer';
        case 'bike gang member':
            return "Moonshine";
        case 'politician':
            return 	"Your tax dollars";
        case 'rapper':
            return "Cristal";
        default:
            return "Beer";
    }
}

echo get_drink_by_profession("Pug");
