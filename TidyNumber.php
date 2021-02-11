<?php

function tidyNumber($n): bool
{
    $nums = str_split((string) $n);
    foreach ($nums as $key => $value)
    {
        if (isset($nums[$key + 1]))
        {
            if ($value > $nums[$key + 1])
                return false;
        }
    }
    return true;
}

var_dump(tidyNumber(9672));
