<?php
$finalnums = 5;
$nums = $finalnums;

$sum = 0;

$current = 1;


while ($nums > 0) {
    if ($current % 5 == 0) {
        echo "$current es multiplo de 5\n";
        $sum += $current;
        $nums--;
    }
    $current++;
}
echo "La suma de los primeros $finalnums multiplos de 5 es : $sum";
?>
