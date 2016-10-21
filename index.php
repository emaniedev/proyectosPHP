<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        function borraDatabase($conexion) {
            $conexion->query("Drop database alumnos");
        }
        //se crea un objeto de la clase mysqli con la direccion ip y un pass.
        $conexion = new mysqli("localhost", "root");

        if ($conexion->connect_error) {
            echo "Error de conexion con numero ----> " . $conexion->connect_errno . "</br>" . $conexion->connect_error;
        } else {
            echo "<h2>Se ha establecido la conexion.</h2>";
            $consulta = "CREATE DATABASE alumnos default character set UTF8 collate UTF8_general_ci;";

            if ($conexion->query($consulta)) {
                echo "<h2>La base de datos se ha creado con exito.</h2>";
                $conexion->close();
                $conexion = new mysqli("localhost", "root", "", "alumnos");
                $consulta = "CREATE TABLE alumno(
                        codigo int not null auto_increment primary key,
                        nombre varchar(30) not null,
                        domicilio varchar(30) not null,
                        provincia varchar (20) not null) 
                        engine=myisam"
                ;
                if ($conexion->query($consulta)) {
                    echo "<h2>Se ha creado la tabla de la base de datos</h2>";
                    $conexion->query("INSERT INTO alumno VALUES
                            ('','edgar','grijota','palencia'),
                            ('','isma','palencia','palencia'),
                            ('','paco','granada','palencia');");
                    
                    
                    
                    
                } else {
                    echo "<h2>No se ha podido crear la tabla</h2>";
                }
            } else {
                echo "<h2>No se ha podido crear la base de datos</h2>";
            }
        }
        
        ?>
        <form action="control.php" method="POST">
            <input type="submit" value="Borrar DB"/> 
        </form>
    </body>
</html>
