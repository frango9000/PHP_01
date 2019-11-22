<?php
$x = $_POST['num1'];
$y = $_POST['num2'];
if (empty($x) or empty($y) or !is_numeric($x) or !is_numeric($y))
    echo "Valor erróneo";
else {
    echo $x . ' + ' . $y . ' = ' . ($x + $y) . '<br>';
    echo $x . ' - ' . $y . ' = ' . ($x - $y) . '<br>';
    echo $x . ' x ' . $y . ' = ' . ($x * $y) . '<br>';
    echo $x . ' / ' . $y . ' = ' . ($x / $y) . '<br>';
    echo $x . ' % ' . $y . ' = ' . ($x % $y) . '<br>';
}
?>