<?php
$db = new mysqli('localhost', 'narf', 'narf', 'narf');
if ($db->connect_errno > 0) {
    die('Imposible conectar [' . $db->connect_error . ']');
}
$sql = "UPDATE narf.test SET name = 'updated' WHERE id =2";
if (!$db->query($sql)) {
    die('Ocurriu un error executando a query [' . $db->error . ']');
}
echo 'Filas modificadas: ' . $db->affected_rows;
?>