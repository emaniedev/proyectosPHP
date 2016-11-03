<?php

$nombre = $_POST["nombre"];
$modulo = $_POST["modulo"];
$nota = $_POST["nota"];
$alumnos [0][0] = $nombre;
$alumnos [0][1] = $modulo;
$alumnos [0][2] = $nota;

printr($alumnos);


?>

