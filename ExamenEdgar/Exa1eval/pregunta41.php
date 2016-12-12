<?php

/* 
 * Edgar Maniega Medrano
 * 
 * Pregunta 4 examen
 */


session_start();



$nombre = $_POST['nombre'];
$edad = $_POST['edad'];
$sexo = $_POST['sexo'];
$minombre = $_POST['minombre'];

$hora = date("H:i:s");

$registro = array(
    'nombre' => $nombre,
    'edad' => $edad,
    'sexo' => $sexo,
    'minombre' => $minombre,
    'hora' => $hora
);


$_SESSION['array'][$_SESSION['contador']] = $registro;


header("refresh: 5 ; url=pregunta4.php");

echo "Se ha añadido el registro al array";
        




