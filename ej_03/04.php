<?php
function echoVar($x)
{
    echo $x;
}

function pow2($x)
{
    return pow($x, 2);
}

$x = 4;
$y = pow2($x);
echoVar($y);