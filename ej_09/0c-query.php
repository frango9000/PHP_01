<?php
$db = new mysqli('localhost', 'narf', 'narf', 'narf');
if ($db->connect_errno > 0) {
    die('Imposible conectar [' . $db->connect_error . ']');
}
$sql = "SELECT * FROM narf.test";
if (!$resultado = $db->query($sql)) {
    die('Ocurriu un erro executando a query [' . $db->error . ']');
}
$numfilas = $resultado->num_rows;
for ($x = 0; $x < $numfilas; $x++) {
    $fila = $resultado->fetch_object();
    echo $fila->id . ' '; //ou echo $fila->linguaxe;
    echo $fila->name . "\n"; //ou echo $fila->uso;
}
?>