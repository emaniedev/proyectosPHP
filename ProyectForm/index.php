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
         <link rel="stylesheet" href="../patata.css">
    </head>
    <body>
       <div id="cabecera">
            <h1>Patata is love patata is life FTW</h1>
            <div class="sub-componente" style="position:relative;bottom:75px;left:700px;text-align:center;padding:10px;">
                <?php
                $visitante = rand(500, 200000);
                echo "<h4>Eres el visitante: $visitante</h4>"
                ?>
            </div>
        </div>
        
        <!--
        Formularios
        -->
        <div class="componente" style="display: true">
            <h3>Ej: Formularios</h3>
             <?php
        

            ?>
        </div>
    </body>
</html>
