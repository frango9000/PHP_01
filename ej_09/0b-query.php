<?php
$db = new mysqli('localhost', 'narf', 'narf', 'narf');
if ($db->connect_errno > 0) {
    die('Imposible conectar [' . $db->connect_error . ']');
}
$sql = "SELECT * FROM narf.test";
if (!$resultado = $db->query($sql)) {
    die('Ocurriu un erro executando a query [' . $db->error . ']');
}
echo 'Cantidade de filas: ' . $resultado->num_rows . "\n";
while ($fila = $resultado->fetch_assoc()) {
    /*
     *  $fila é un arreglo asociativo con todos os campos que se puxeron
     *  no select. É dicir, e onde se acumula o valor de cada fila da táboa, cos
     *   elemenentos de cada columna almaceados
    */
    echo $fila['id'] . ' ' . $fila['name'] . "\n";
}
