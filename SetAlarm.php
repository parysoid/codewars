<?php
function setAlarm(bool $employed, bool $vacation): bool {

    if ($employed === true && $vacation == true)
        return false;
    elseif ($employed === false && $vacation == true)
        return false;
    elseif ($employed === true && $vacation == false)
        return true;
    return false;
}