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
        <link rel="stylesheet" href="../patata.css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
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
            <h3>Estas son las cookies que tenemos activas:</h3>
            </hr>
            <ul>
                <?php
                $count = 0;
                foreach ($_COOKIE as $key => $value) {
                    $count++;
                    echo "<b>$count</b>";
                    echo "<ul>";
                    echo "<li>";
                    echo "Nombre: $key";
                    echo "</li>";
                    echo "<li>";
                    echo "Contenido: $value";
                    echo "</li>";
                    echo "</ul>";
                    echo "</br>";
                }
                ?>

            </ul>
            </hr>
            <a href="index.php"><button class="btn btn-default">Volver</button></a>

        </div>
        <?php
        // put your code here
        ?>
    </body>
</html>
