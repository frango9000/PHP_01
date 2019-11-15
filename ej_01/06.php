<?php

$max = 111;

$current = 1;

$parsum = 0;
$inparsum = 0;

while ($current < $max) {
    if ($current % 2 == 0)
        $parsum += $current;
    else $inparsum += $current;
    $current++;

}


echo "Suma de pares $parsum\n";
echo "Suma de impares $inparsum";
?>
