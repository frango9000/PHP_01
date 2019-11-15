<?php
function getmes($x)
{
    $meses = array("enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
    if ($x > 0 && $x < 13)
        return $meses[$x - 1];
}

echo getmes(5);