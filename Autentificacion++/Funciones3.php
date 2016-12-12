<?php
if(isset($_POST['entrar'])){
        
        $nombre = $_POST['nombre'];
        $contraseña = $_POST['contraseña'];

        $contraseñaCifrada = md5($contraseña);

        $conexion = new mysqli("localhost", "root", "", "usuarios");
        
        //$sql = "Select * From contrasenas WHERE Nombre = '$nombre' && password = '$contraseñaCifrada'";
        
        $consulta = $conexion->stmt_init();
        $consulta->prepare("Select * From contrasenas WHERE Nombre = ? && password = ?");
        $consulta->bind_param("ss", $nombre, $contraseñaCifrada);
        $consulta->execute();
        if($consulta->fetch()){
            header("refresh:0; url=index.html");
        }  else {
            echo "error";
        }
        $consulta->close();
        $conexion->close();
        
        
}
?>
