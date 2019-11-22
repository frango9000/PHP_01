<?php
$x = $_POST['nombre'];

if (empty($x))
    header("Location: index.html");
else echo $x;
?>