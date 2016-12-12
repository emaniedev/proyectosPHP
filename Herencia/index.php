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
        <?php
        require 'Persona.php';
        require 'Alumno.php';
        ?>
    </head>
    <body>
        
        <?php
            $persona = new Alumno();
            
            var_dump($persona);
            
            $persona->asignarTodos("luis", 21, "hombre","Palencia","07/06/1989", "DAW", 2);
            
            var_dump($persona);
            
            $persona->verNombreCiudadCiclo();
            
            echo "<hr/>";
            $persona->visualizarNombre()
        ?>
        
    </body>
</html>
