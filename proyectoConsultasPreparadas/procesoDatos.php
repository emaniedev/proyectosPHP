<?php
        
//iniciamos la sesion.
if (!isset($conexion)){
    $conexion = new mysqli('localhost', 'root', '', 'colegio');

}



$nombre = $_POST["nombre"];
$modulo = $_POST["modulo"];
$edad = $_POST["edad"];
$sexo = $_POST["sexo"];
$provincia = $_POST["provincia"];
$id = "";


$sql = "INSERT INTO alumnos VALUES
        ('$nombre','$edad',$sexo,'$provincia','$modulo')";
$consulta = $conexion->stmt_init();
$consulta->prepare('INSERT INTO alumnos VALUES (?,?,?,?,?,?)');
$consulta->bind_param("isisss",$id,$nombre,$edad,$sexo,$provincia,$modulo);
$consulta->execute();
$consulta->close();
$conexion->close();

        ?>

