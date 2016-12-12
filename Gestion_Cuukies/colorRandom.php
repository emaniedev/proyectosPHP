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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="../patata.css"/>
    </head>
    <body style="background-color:<?php echo $_COOKIE['color']?>">
        <div id="cabecera">
            <h1>Patata is love patata is life FTW</h1>
            <div class="sub-componente" style="position:relative;bottom:75px;left:700px;text-align:center;padding:10px;">
                <?php
                $visitante = rand(500, 200000);
                echo "<h4>Eres el visitante: $visitante</h4>";
                ?>
            </div>
        </div>
        <div class="componente">
            
        
        <?php
            $random = rand(1, 6);
            
            switch ($random) {
                case 1:
                    $color = "blue";

                    break;
                case 2:
                    $color = "grey";
                    break;
                case 3:
                    $color = "purple";
                    break;
                case 4:
                    $color = "crimson";
                    break;
                case 5:
                    $color = "brown";
                    break;
                case 6:
                    $color = "goldenrod";
                    break;
                
            }
            
            $contenido = $color;
            
            $nombre = "color";
            $expiracion = 7 * 24 * 60 * 60;
            
            setcookie($nombre, $contenido, time() + $expiracion);
            
            echo "<h2>Se ha establecido el color de la sesion a $contenido.</h2>";
            header("refresh: 1; url=index.php");
        ?>
            <a href="index.php"><button class="btn btn-warning btn-block">Volver</button></a>
        </div>
    </body>
</html>
