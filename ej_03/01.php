<?php

function isPar($x)
{
    return ($x % 2 == 0);
}

$a = 11;
$b = 12;

if (isPar($a))
    echo "$a es par";
else echo "$a es inpar";
echo "\n";
if (isPar($b))
    echo "$b es par";
else echo "$b es inpar";