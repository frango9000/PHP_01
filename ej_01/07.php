<?php

$n = 5;
$t = 1;
$cuadrados = 0;
$cubos = 0;

while ($t <= $n) {
    $cuadrados += pow($t, 2);
    $cubos += pow($t, 3);
    $t++;
}

echo "Suma de cuadrados : $cuadrados\n";
echo "Suma de cubos : $cubos";

?>