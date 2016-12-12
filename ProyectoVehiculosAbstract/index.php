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
        include 'VehiculoRuedas.php';
        include 'Coche.php';
        
        $vehiculo = new Coche("si",4,"gasolina",5);
        
        $vehiculo->visualizarDatos();
        ?>
    </body>
</html>
