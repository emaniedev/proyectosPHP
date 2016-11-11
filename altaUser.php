<?php require './includes/header.php';?>
<?php

$nombre = $_POST['nombre'];
$pass = md5 ($_POST['pass']);

$conexion = new mysqli("localhost","root","","usuarios");

$consulta= $conexion->stmt_init();

$consulta->prepare("INSERT INTO contrasenas VALUES('$nombre','$pass')");


$consulta->execute();


    echo "Se ha creado el usuario";
    header("Refresh:1;url=index.php");


$consulta->close();
$conexion->close();

?>