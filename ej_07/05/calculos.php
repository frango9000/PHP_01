<?php
$x = $_POST['horasdia'];
$y = $_POST['dias'];
$z = $_POST['bruto'];

$salariobruto = $x * $y * $z;
echo 'Salario neto: ' . ($salariobruto - ($salariobruto * 0.12));
?>