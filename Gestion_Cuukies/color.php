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
        <div class="componente"  >
            <form class="form-horizontal"  action="coloreado.php" method="post">
                
                <div class="form-group">
                    
                    <p>Elige el color que quieras</p>
                        <label>
                            Amarillo
                            <input class="radio"type="radio" name="color" value="yellow">
                        </label>
                        <label>
                            Naranja
                            <input class="radio"type="radio" name="color" value="orange">
                        </label>
                        <label>
                            Verde
                            <input class="radio"type="radio" name="color" value="green">
                        </label>

                    
                </div>               
                <input class="form-control btn btn-success"type="submit" value="Enviar">
            </form>
            <a href="index.php"><button class="btn btn-warning btn-block">Volver</button></a>
        </div>
    </body>
</html>
