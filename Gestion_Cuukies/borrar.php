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
            <form class="form-horizontal" action="borrado.php" method="post">
                <p>Selecciona la cookie que quiere borrar.</p>
                <div class="form-group">
                    <select class="form-control" name="cookie">
                        <?php
                        foreach ($_COOKIE as $key => $value) {
                            echo "<option value=\"$key\">";
                            echo "$key";
                            echo "</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <input type="submit" class="form-control btn btn-success" value="Borrar">
                </div>
            </form>
            <a href="index.php"><button class="btn btn-danger btn-block">Volver</button></a>

        </div>
        <?php
        // put your code here
        ?>
    </body>
</html>
