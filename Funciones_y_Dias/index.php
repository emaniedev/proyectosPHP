<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tonteria con dias</title>
    </head>
    <body>
        <div style="border: solid 2px orange; top: auto; left: auto;margin: 200px;align-items: center ;padding: 25px;background-color: grey; text-align: center;">
            <?php
                date_default_timezone_set('Europe/Madrid');
                include 'funciones.php';
                $hoy = getdate();
                    $dia = $hoy ["mday"];
                    $diat = $hoy ["wday"];
                    $mon = $hoy ["mon"];
                    $año = $hoy ["year"];
                    $textoFecha = "Hoy es ".dameDia($diat).", $dia de ".dameMes($mon)." del $año.";
                echo "<h1 style=\"color: orange\">$textoFecha</h1>";
                
            ?>
            
        </div>
        
        
    </body>
</html>
