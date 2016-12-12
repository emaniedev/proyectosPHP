<?php
    
    if(isset($_POST['aceptar'])){
        $nombre = $_POST['nombre'];
        $contraseña = $_POST['contraseña'];

        $contraseñaCifrada = md5($contraseña);

        $conexion = new mysqli("localhost", "root", "", "usuarios");

        $consulta = "INSERT INTO contrasenas VALUES ('$nombre', '$contraseñaCifrada')";

        $resultado = $conexion->query($consulta);

        if($resultado){
            echo "<p>Usuario creado con exito";
        }else{
            echo "<p>Usuario no creado con exito";
        }

        echo"<p style=\"color:red\">Nombre: $nombre </p>";
        echo "<p style=\"color:blue\">Contraseña: ".md5($contraseña)."</p>";

        $conexion->close();
    }
    
    if(isset($_POST['entrar'])){
        $nombre = $_POST['nombre'];
        $contraseña = $_POST['contraseña'];

        $contraseñaCifrada = md5($contraseña);

        $conexion = new mysqli("localhost", "root", "", "usuarios");
        
        $consulta = "Select * From contrasenas";
        
        $resultado = $conexion->query($consulta);
        
        $sn = true;
        
        $sp = true;
        
        while($sp && $fila = $resultado->fetch_array(MYSQLI_BOTH)){
            if($nombre == $fila[0]){
                $sn = FALSE;
                if($contraseñaCifrada == $fila[1]){
                    $sp = FALSE;
                    header("refresh:0; url=index.html");
                    
                }
            }
            
        }
        if($sn){
            print"el usuario no existe";
        }elseif($sp){
            print"contraseña incorrecta";
        }
        
    }
?>

<html>
    <a href="Auteticar.php">volver atras</a>
</html>

