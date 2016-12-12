<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Gestion cuukies</title>
        
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
            <a href="establecer.php"><button class="btn btn-default btn-block">Establecer Cookies</button></a>
            <a href="leer.php"><button class="btn btn-default btn-block">Leer Cookies</button></a>
            <a href="borrar.php"><button class="btn btn-default btn-block">Borrar Cookies</button></a>
            <a href="color.php"><button class="btn btn-default btn-block">Establecer Color</button></a>
            <a href="colorRandom.php"><button class="btn btn-default btn-block">Color random</button></a>
            <a href="colored.php"><button class="btn btn-default btn-block">Epilepsia</button></a>
           <?php
            //echo phpinfo();
            ?>
        </div>
    </body>
</html>
