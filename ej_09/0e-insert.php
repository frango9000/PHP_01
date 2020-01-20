<?php
$db = new mysqli('localhost', 'narf', 'narf', 'narf');
if ($db->connect_errno > 0) {
    die('Imposible conectar [' . $db->connect_error . ']');
}
$sql = "INSERT INTO narf.test (id, name) VALUES(4,'nom4')";
if (!$db->query($sql)) {
    die('Ocurriu un error executando a query [' . $db->error . ']');
}
echo 'Filas Insertadas: ' . $db->affected_rows;
?>