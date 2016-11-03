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
        include 'funciones.php';
        $hoy = getdate();
            $dia = $hoy [mday];
            $diatexto = $hoy [wday];
            $mes = $hoy [mon];
            $año = $hoy [year];
            $textoFecha = "Hoy es ".dameDia($diatexto).", $dia de ".dameMes($mes)." del $año.";
        echo "<h1>$textoFecha</h1>";
        ?>
    </body>
</html>
