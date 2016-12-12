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
        
        <a href="index.php"><button class="btn btn-warning">Volver</button></a>
        <?php
        
        $random = rand(1, 8);
            
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
                case 7:
                    $color = "yellow";
                    break;
                case 8:
                    $color = "green";
            }
            
            $contenido = $color;
            
            $nombre = "color";
            $expiracion = 7 * 24 * 60 * 60;
            
            setcookie($nombre, $contenido, time() + $expiracion);
            header("refresh: 0.7; url=colored.php");
        ?>
    </body>
</html>
