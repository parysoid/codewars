<?php
function sea_sick(string $s): string
{
    $x = substr_count($s,'~_');
    if ($x * 2 > strlen($s) / 5)
        return "Throw Up";
    return "No Problem";
}
echo(sea_sick("_~~~~~~~_~__~______~~__~~_~~"));