<?php
function checkAlive($health) {
    if ($health <= 0)
        return false;
    else
        return true;
}

echo (checkAlive(5));