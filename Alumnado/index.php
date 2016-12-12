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
        
        
        require 'Alumno.php';
        
        $uno = new Alumno("Edgar", 25, "varon");
        
        
        echo "Tenemos ".$uno->contarAlumnos()." alumnos matriculados.";
        
        echo "</br>";
        echo "<hr/>";
        
        $uno->visualizar();
        
        echo "</br>";
        echo "<hr/>";
        
        $uno->modificarEdad(15);
        $uno->modificarNota(10, 2);
        
        $uno->visualizar();
        ?>
    </body>
</html>
