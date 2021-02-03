<?php
function boolToWord($bool): string
{
    switch ($bool)
    {
        case true:
            return 'Yes';

        case false:
            return 'No';
    }
    return $bool;
}

print_r(solution("world"));