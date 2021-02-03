<?php
function getAge(string $response): string
{
    return substr($response,0,1);
}

echo (getAge('3 years old'));
