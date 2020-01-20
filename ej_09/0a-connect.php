<?php
$db = new mysqli('localhost', 'narf', 'narf', 'narf');
// O primeiro parámetro é o host onde se atopa a base de datos
// O segundo parámetro é o usuario co que se desexa conectar
// O terceiro parámetro é a clave do usuario
// O cuarto é a base de datos que se desexa utilizar
// Por último débese revisar se a conexión realizar sen ningún problema
// para isto faise uso da propiedade 'connect_errno' sobre o obxecto
// da conexión á base de datos
if ($db->connect_errno > 0) {
    die('Imposible conectar [' . $db->connect_error . ']');
// Se se conseguiu algún erro entón móstrase cal foi
} else {
    echo 'Conectado';
// Se non se consegue algún erro entón a conexión realizar correctamente
}
?>