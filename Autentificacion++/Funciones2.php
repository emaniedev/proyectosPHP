<?php
    if(isset($_POST['entrar'])){
        
        $nombre = $_POST['nombre'];
        $contraseña = $_POST['contraseña'];

        $contraseñaCifrada = md5($contraseña);

        $conexion = new mysqli("localhost", "root", "", "usuarios");
        
        $consulta = "Select * From contrasenas WHERE Nombre = '$nombre' && password = '$contraseñaCifrada'";
        
        $resultado = $conexion->query($consulta);
        
        $fila = $resultado->fetch_array();
        
        //if($fila[0] != NULL){ //FUNCIONAN LAS DOS MANERAS
        if(isset($fila)){
            header("refresh:0; url=index.html");
        }else{
            echo "nombre de usuario y contraseña no coinciden";
        }
    }
?>
