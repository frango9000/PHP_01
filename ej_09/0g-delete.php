<?php
$db = new mysqli('localhost', 'narf', 'narf', 'narf');
if ($db->connect_errno > 0) {
    die('Imposible conectar [' . $db->connect_error . ']');
}
$sql = "DELETE FROM narf.test WHERE id =2";
if (!$db->query($sql)) {
    die('Ocurriu un error executando a query [' . $db->error . ']');
}
echo 'Filas eliminadas: ' . $db->affected_rows;
?>