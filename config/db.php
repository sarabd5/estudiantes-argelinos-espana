<?php

$conexion =
new mysqli(
"localhost",
"sarah",
"1234",
"proyecto"
);

if($conexion->connect_error)
{
die("Error conexión");
}

?>
