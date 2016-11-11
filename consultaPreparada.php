<?php

$nombre = $_POST['nombre'];
$pass = md5 ($_POST['pass']);

$conexion = new mysqli("localhost","root","","usuarios");

$consulta= $conexion->stmt_init();

$consulta->prepare("SELECT * FROM contrasenas WHERE nombre=? AND password=?");

$consulta->bind_param("ss", $nombre,$pass);
$consulta->execute();

if ($consulta->fetch()){
    echo "autenticación correcta.";
    header("Refresh:1;url=index.php");
} else {
    echo "error";
    header("Refresh:1;url=index.php");
}

$consulta->close();
$conexion->close();

?>