<?php
function calcIve($valor, $percent = 18)
{
    return ($valor * $percent) / 100;
}

echo calcIve(1000) . "\n";
echo calcIve(1000, 8) . "\n";
echo calcIve(10, 0) . "\n";