<?php

/* 
 Edgar Maniega Medrano
 * 
 * pregunta 6 examen 
 */
$conexion = new mysqli('localhost', 'root', '', 'colegio');

$nombre = $_POST['nombre'];
$edad = $_POST['edad'];
$sexo = $_POST['sexo'];


$sql = "INSERT INTO `alumnos` (`nombre`, `edad`, `sexo`) VALUES ('$nombre', '$edad', '$sexo') ";

$resultado = $conexion->query($sql);

if ($resultado > 0){
    echo "Se ha añadido el resgistro";
    
}else {
    echo "no se ha podido añadir el registro";
}

header("refresh: 5 ; url=pregunta61.php");

?>

