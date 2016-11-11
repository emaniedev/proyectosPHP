<?php require './includes/header.php';?>

<div class="componente">
    <h2>
<?php

$nombre = $_POST['nombre'];
$pass = md5($_POST['pass']);

$conexion = new mysqli("localhost", "root", "", "usuarios");



$consulta1 = $conexion->query("SELECT * FROM contrasenas WHERE nombre='$nombre'");
$consulta1 = $consulta1->fetch_array();

if (isset($consulta1)) {
    
    $consulta2 = $conexion->query("SELECT * FROM contrasenas WHERE nombre='$nombre' AND password='$pass'");
    $consulta2 = $consulta2->fetch_array();
    
    if (isset($consulta2)) {
        echo "autenticación correcta.";
        header("Refresh:2;url=index.php");
    } else {
        echo "Autenticación incorrecta";
        header("Refresh:2;url=index.php");
    }
    
} else {
    echo "El nombre no esta en la base de datos";
    header("Refresh:2;url=index.php");
}


$conexion->close();
?>
    </h2>
</div>